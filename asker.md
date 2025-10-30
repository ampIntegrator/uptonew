<div class="infraBox">
    <div id="001" class="flexCS">
        <span class="fs-0 text-success me-2 fw-bold">
            01
        </span>
        <h4 class="fw-bold flexCS m-0">
            Stratégie business <br>
            &amp; plan d'actions trimestriel
        </h4>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam est a eaque
        temporibus vero animi exercitationem dignissimos, doloribus aliquid alias!</p>
</div>

ET

<div class="infraBox">
    <h3 id="003">Suivre et améliorer vos performances</h3>
    <div class="separator"></div>
    <p>Fini les décisions à l'aveugle. Nous mettons en place un tracking fiable et complet,
        puis nous centralisons vos données dans des dashboards clairs et simples à lire.
        Vous savez exactement ce qui fonctionne, ce qui coûte trop cher et ce qu'il faut
        ajuster pour améliorer vos résultats mois après mois.</p>
</div>

ET
<div class="infraBox">
    <h3 id="003" class="headingWithIcon">
        <i class="icon icon-gear-2"></i>
        Ceci est une icone de ventilateur
    </h3>
    <p>Fini les décisions à l'aveugle. Nous mettons en place un tracking fiable et complet,
        puis nous centralisons vos données dans des dashboards clairs et simples à lire.
        Vous savez exactement ce qui fonctionne, ce qui coûte trop cher et ce qu'il faut
        ajuster pour améliorer vos résultats mois après mois.</p>
</div>                                



J'aimerais gérer les 3 id de la même façon, c'est à dire les trois boites de titres, avec, pour #002, la prise en compte du .Separator, que l'on va transformer en :after. 


L'idée serait d'avoir la même présentation, par exemple : 

<h3 class="blocTitle withFigure">
 ici, on a comme id=001 : un chiffre, dans une balise span 
</h3>

<h3 class="blocTitle withSeparator">
 ici, on a comme id=002 : un separator en :after qui reprend .separator
</h3>

<h3 class="blocTitle withIcon">
 ici, on a comme id=003 : une icone. 
</h3>

On peut ajouter .colorXXX à .blocTitle. 

Dans le cas de .withFigure : c'est le chiffre dans le span qui sera text: $color.
Dans le cas de .withSeparator, c'est le :after qui a le background de la $color. 
Dans le cas de .withIcon, c'est l'icone qui sera text: $color.

Le font-size est le même partou, à gérer depuis .blocTitle, avec font-size: 28px;

As-tu des questions ? Est-ce clair ? Tu répondes avant de te lancer.
J'ai mis à jour main 