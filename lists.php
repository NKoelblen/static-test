<?php $page_title = "Listes";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./lists.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <!-- liste ordonnée
                attributs:
                    reversed (sans valeur): en ordre inversé
                    start: nombre entier à partir duquel on commence à compter
                    type: type de numérotation
                        1: chiffres (par défaut)
                        a: lettres minuscules
                        A: lettres majuscules
                        i: chiffres romains minuscules
                        I: chiffres romains majuscules -->
    <ol>
        <li></li> <!-- élément de liste ; attribut value avec ol: valeur ordinale, les éléments suivants continueront la numérotation à partir de cette valeur -->
        <li></li>
    </ol>

    <ul> <!-- liste à puce -->
        <li></li>
        <li></li>
    </ul>

    <menu> <!-- liste à puce -->
        <li></li>
        <li></li>
    </menu>

    <dl> <!-- liste de définitions -->
        <dt></dt> <!-- terme -->
        <dd></dd> <!-- définition -->
        <dt></dt>
        <dd></dd>
        <dd></dd>
    </dl>

</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>