<header> <!-- en-tête de la page -->
    <hgroup> <!-- groupe de titre du parent -->
        <h1><?= $page_title ?></h1> <!-- titre niveau 1 ; unique ; titre de la page -->
        <p>Sous-titre</p>
        <p>Lorem ipsum dolor sit amet.</p>
    </hgroup>
    <div><span>Noémie Koelblen</span><span><?= $page_date->format('d/m/Y'); ?></span></div> <!-- rubriques, étiquettes, auteur, date de publication, nombre de commentaire, note etc. -->
</header>