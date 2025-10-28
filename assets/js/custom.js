document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner le span et le path du SVG à modifier
    const logoSpan = document.querySelector('.navbar-brand span span');
    const svgPath = document.querySelector('.navbar-brand svg path[fill="#01FF88"]');
    
    // Sélectionner toutes les sections
    const sections = document.querySelectorAll('section[id^="section"]');
    
    // Définir les classes de couleur et leurs valeurs hex correspondantes
    const colorData = [
        { class: 'text-success', hex: '#01FF88' },
        { class: 'text-primary', hex: '#4157D0' },
        { class: 'text-info', hex: '#72d2c2' },
        { class: 'text-warning', hex: '#ffc107' },
        { class: 'text-danger', hex: '#dc3545' }
    ];
    
    // Fonction pour changer les couleurs
    function updateColors(index) {
        // Retirer toutes les classes de couleur du span
        colorData.forEach(color => logoSpan.classList.remove(color.class));
        
        // Ajouter la nouvelle classe au span
        logoSpan.classList.add(colorData[index].class);
        
        // Changer la couleur du SVG
        if (svgPath) {
            svgPath.setAttribute('fill', colorData[index].hex);
        }
    }
    
    // Créer l'Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // Quand une section entre dans la zone du haut
            if (entry.isIntersecting) {
                // Récupérer l'index de la section
                const sectionIndex = Array.from(sections).indexOf(entry.target);
                // Calculer l'index de couleur (boucle sur les couleurs avec modulo)
                const colorIndex = sectionIndex % colorData.length;
                // Mettre à jour les couleurs
                updateColors(colorIndex);
            }
        });
    }, {
        // Déclenche exactement quand la section atteint le haut, sans marge
        rootMargin: '0px 0px -90% 0px',
        threshold: 0
    });
    
    // Observer toutes les sections
    sections.forEach(section => observer.observe(section));
    
    // Appliquer les couleurs initiales
    updateColors(0);
});

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollPosition > 15) {
            document.body.classList.add('is-scrolled');
        } else {
            document.body.classList.remove('is-scrolled');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Liste des couleurs
    const colorNames = ['Primary', 'Success', 'Danger', 'Info', 'Orange', 'Purple', 'Warning', 'Teal', 'Indigo', 'Cyan'];
    
    // Trouver toutes les zones radio
    const radioZones = document.querySelectorAll('.radioZone');
    
    // Pour chaque zone radio
    radioZones.forEach(radioZone => {
        // Trouver la .box parente la plus proche
        const box = radioZone.closest('.box');
        
        if (!box) return; // Si pas de .box parente, on skip
        
        // Trouver tous les radios dans cette zone
        const radios = radioZone.querySelectorAll('input[type="radio"]');
        
        // Fonction pour changer la couleur de cette box spécifique
        function changeBoxColor(colorName) {
            // Retirer toutes les classes color*
            colorNames.forEach(color => {
                box.classList.remove('color' + color);
            });
            
            // Ajouter la nouvelle classe
            box.classList.add('color' + colorName);
        }
        
        // Écouter les changements sur tous les radios de cette zone
        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    // Extraire le nom de la couleur depuis l'ID (radio[ColorName] ou radio[ColorName]2)
                    const id = this.id;
                    const colorName = colorNames.find(color => id.includes('radio' + color));
                    
                    if (colorName) {
                        changeBoxColor(colorName);
                    }
                }
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const liSuccess = document.querySelector('.liSuccess');
    const liDanger = document.querySelector('.liDanger');
    const liPrimary = document.querySelector('.liPrimary');
    
    const rowSuccess = document.querySelector('.underMenu .rowSuccess');
    const rowDanger = document.querySelector('.underMenu .rowDanger');
    const rowPrimary = document.querySelector('.underMenu .rowPrimary');
    
    const underMenu = document.querySelector('.underMenu');
    const allRows = [rowSuccess, rowDanger, rowPrimary];
    
    // Fonction pour tout cacher
    function hideAll() {
        allRows.forEach(row => {
            if (row) row.style.display = 'none';
        });
        underMenu.style.height = '0px';
    }
    
    // Fonction pour afficher une row
    function showRow(row) {
        hideAll();
        if (row) {
            row.style.display = 'flex';
            // Petit délai pour que le display:block soit pris en compte avant l'animation
            setTimeout(() => {
                underMenu.style.height = '400px';
            }, 10);
        }
    }
    
    // Hover liSuccess
    if (liSuccess && rowSuccess) {
        liSuccess.addEventListener('mouseenter', function() {
            showRow(rowSuccess);
        });
    }
    
    // Hover liDanger
    if (liDanger && rowDanger) {
        liDanger.addEventListener('mouseenter', function() {
            showRow(rowDanger);
        });
    }
    
    // Hover liPrimary
    if (liPrimary && rowPrimary) {
        liPrimary.addEventListener('mouseenter', function() {
            showRow(rowPrimary);
        });
    }
    
    // Quand on quitte le header
    const header = document.querySelector('header');
    if (header) {
        header.addEventListener('mouseleave', function() {
            hideAll();
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.clientSlider .slider-track');
    const firstUl = sliderTrack.querySelector('ul');
    
    // Cloner automatiquement le ul pour l'effet seamless
    const clone = firstUl.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    sliderTrack.appendChild(clone);
});