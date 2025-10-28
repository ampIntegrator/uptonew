voici le css :

    .olStepper {
        display: flex;
        counter-reset: stepper-counter; // Initialise le compteur

        .stepperItem {
            counter-increment: stepper-counter; // Incrémente le compteur pour chaque item
            list-style: none;
            &:before {

                content: counter(stepper-counter); // Affiche le numéro
                display: flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background-color: $white;
                margin: 0 auto 1rem;
                font-weight: 600;
                font-size: 20px;
            }

            &.active {
                &:before {
                    color: $white;
                }

            }
        }
    }


    voici le html :

                                    <ol class="olStepper p-0 m-0">
                                    <li class="stepperItem">
                                    </li>
                                    <li class="stepperItem active">
                                        
                                    </li>
                                    <li class="stepperItem">

                                    </li>
                                    <li class="stepperItem">

                                    </li>
                                    <li class="stepperItem">

                                    </li>
                                </ol>


Je veux y mettre cette logique : 
    <style>
        ul > li {
    opacity: 0.5;
    font-style: italic;
}

/* Reset pour .active et ceux APRÈS */
li.active,
li.active ~ li {
    opacity: 1;
    font-style: normal;
}

/* Style spécifique pour APRÈS .active */
li.active ~ li {
    color: blue;
}
    </style>

mais pas avec ce style : 

les .stepperItem avant .stepperItem.active ont non pas le counter, mais une icone, qui sera en li:before{content: "\ea03"; font-family: Nucleo}


les .stepperItem après .active sont en backgrund-color: #ccc et color: white 


Est-ce clair ? as-tu des questions ?