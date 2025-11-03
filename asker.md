On va se servir de la fonticon en base64 basix pour peupler les éléments fondamentaux du site. 


Tu vas faire ces modifications en bas de main.scss, que je puisse ensuite centraliser la gestion des icones de base, toutes en :after 

ACCORDIONS
<h2 class="accordion-header">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne001" aria-expanded="true" aria-controls="collapseOne001">
        <span>Accordion Item #1</span>
        <i class="icon icon-chevron-down"></i>
    </button>
</h2>

                        ici, on va remplacer <i class="icon icon-chevron-down"></i> par button.accordion-button:after avec : .basix-priority-low enfin son unicode.


                        ne pas oublier la rotation à l'ouverture et la fermeture 

BLOG VOIR PLUS
<span class="voirPlus flexCS">Voir plus <i class="icon icon-chevron-right"></i></span>
on remplace le i ici par un :after sur le span qui reprend :
.basix-arrow-right-1


Dans le .stepper, il faut remplacer le :before
.stepper .olStepper .stepperItem:before
par l'unicode de .basix-check-2


Dans le select2, il faut mettre cela en display none :  
.select2-container--default .select2-selection--single .select2-selection__arrow b
et mettre sur :
.select2-container--default .select2-selection--single .select2-selection__arrow:before l'unicode de .basix-priority-low


Et enfin, toujours dans select2? il faut remplacer 
.select2-container--default .select2-selection--single .select2-selection__clear qui a un simple x, la lettre, par l'unicode de .basix-xmark en :before

est-ce clair dans tous les cas ? 
Tu peux ajuster le scss pour que je puisse gérer ces unicodes facilement, à la fin de main.scss ? ainsi que le font-size ? 