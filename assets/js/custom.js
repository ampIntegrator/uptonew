document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner le span et le path du SVG à modifier
    const logoSpan = document.querySelector('.navbar-brand span span');
    const svgPath = document.querySelector('.navbar-brand svg path[fill="#01FF88"]');
    
    // Appliquer les transitions CSS directement via JS
    if (logoSpan) {
        logoSpan.style.transition = 'color 3s ease-in-out';
    }
    if (svgPath) {
        svgPath.style.transition = 'fill 3s ease-in-out';
    }
    
    // Définir les classes de couleur et leurs valeurs hex correspondantes
    const colorData = [
        { class: 'text-success', hex: '#01FF88' },
        { class: 'text-primary', hex: '#4157D0' },
        { class: 'text-info', hex: '#72d2c2' },
        { class: 'text-warning', hex: '#ffc107' },
        { class: 'text-danger', hex: '#dc3545' }
    ];
    
    let currentIndex = 0;
    
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
    
    // Appliquer les couleurs initiales
    updateColors(0);
    
    // Changer de couleur toutes les 8 secondes (5s stable + 3s transition)
    setInterval(() => {
        currentIndex = (currentIndex + 1) % colorData.length; // Boucle infinie
        updateColors(currentIndex);
    }, 8000); // 8000ms = 8 secondes
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

// TO REMOVE? JUST FOR DEMO
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

// AJUSTEMENT COULEUR UNDERMENU HEADER
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

// SCRIPT POUR DEFILEMENT LOGO SLIDER 
document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.clientSlider .slider-track');
    const firstUl = sliderTrack.querySelector('ul');

    // Cloner automatiquement le ul pour l'effet seamless
    const clone = firstUl.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    sliderTrack.appendChild(clone);
});

// Script pour activer automatiquement le menu selon la page actuelle
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer le nom du fichier PHP actuel
    const currentPage = window.location.pathname.split('/').pop();

    // Mapper les pages avec leurs ID de menu correspondants
    const pageToMenuId = {
        'solutions.php': 'item002',
        'troisieme.php': 'item003',
        'quatrieme.php': 'item004',
        'cinquieme.php': 'item005',
        'blog.php': 'item006'
    };

    // Si la page actuelle existe dans le mapping
    if (pageToMenuId[currentPage]) {
        const menuItem = document.getElementById(pageToMenuId[currentPage]);
        if (menuItem) {
            menuItem.classList.add('active');
        }
    }

    // Alternative : ajouter .active sur tous les liens qui correspondent à la page actuelle
    const allNavLinks = document.querySelectorAll('header .nav-link, header .btn');
    allNavLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage) {
            link.classList.add('active');
        }
    });
});

// Fonction pour générer le sommaire (uniquement sur les pages blog)
function generateTableOfContents() {
    const summaryBox = document.querySelector('.summaryBox');
    const postContent = document.querySelector('.postContent');

    // Vérifier que les éléments existent (uniquement sur les pages blog)
    if (!summaryBox || !postContent) return;

    // Récupérer tous les headings (h2, h3, h4, h5, h6)
    const headings = postContent.querySelectorAll('h2, h3, h4, h5, h6');

    if (headings.length === 0) return;

    // Créer la liste
    const ul = document.createElement('ul');
    ul.classList.add('summary-list');

    headings.forEach((heading, index) => {
        // Ajouter un ID au heading si il n'en a pas
        if (!heading.id) {
            heading.id = `heading-${index}`;
        }

        // Créer l'élément de liste
        const li = document.createElement('li');
        li.classList.add(heading.tagName.toLowerCase()); // Ajoute la classe h2, h3, h4, etc.
        li.textContent = heading.textContent;
        li.style.cursor = 'pointer';

        // Ajouter l'événement de clic avec offset de 80px
        li.addEventListener('click', () => {
            const yOffset = -80; // Décalage de 80px vers le haut
            const y = heading.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({
                top: y,
                behavior: 'smooth'
            });
        });

        ul.appendChild(li);
    });

    summaryBox.appendChild(ul);
}

// Exécuter la génération du sommaire au chargement de la page
document.addEventListener('DOMContentLoaded', generateTableOfContents);