<?php $page_title = "Blocs";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./block-elements.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <h2>Titre I</h2> <!-- titre niveau 2 -->

    <h3>Titre I.A</h3> <!-- titre niveau 3 -->

    <h4>Titre I.A.1</h4> <!-- titre niveau 4 -->

    <h5>Titre I.A.1.i</h5> <!-- titre niveau 5 -->

    <h6>Titre I.A.1.i.a</h6> <!-- titre niveau 6 -->

    <p>Lorem ipsum dolor sit amet.</p> <!-- paragraphe -->

    <pre>Lorem ipsum dolor sit amet.</pre> <!-- texte préformaté -->

    <hr> <!-- rupture thématique -->

    <!-- groupes -->

    <div></div> <!-- conteneur -->

    <adress> <!-- informations de contact -->
        <p>Parvis Notre Dame - Place Jean-Paul II - 75004 Paris - France</p>
        <p><a href="mailto:contact@example.com">contact@example.com</a></p>
        <p><a href="tel:+33123456789">01 23 45 67 89</a></p>
        <p><a href="https://example.com" target="_blank" rel="external nofollow noopener">example.com</a></p>
    </adress>

    <blockquote> <!-- citation longue -->
        <p>Lorem ipsum dolor sit amet.</p>
        <p>
            John Smith,
            <cite>Lorem ipsum</cite> <!-- titre de l'oeuvre ; en ligne -->
        </p>
    </blockquote>

    <details> <!-- boîte d'informations masquées à révéler ; attribut open (sans valeur): boite ouverte -->
        <summary>Lorem ipsum</summary> <!-- intitulé -->
        Lorem ipsum dolor sit amet.
    </details>

    <dialog> <!-- boîte de dialogue ; attribut open (sans valeur): boite ouverte -->
        <p>Lorem ipsum dolor sit amet.</p>
    </dialog>

    <figure> <!-- contenu autonome groupant une figure (media, diagramme, fragment de code, poème etc.) et sa légende ; préférer blocquote pour les citations -->
        <!-- figure -->
        <figcaption></figcaption> <!-- légende -->
    </figure>

    <hgroup> <!-- groupe de titre -->
        <h2>Titre</h2>
        <p class="sous-titre">Sous-titre</p>
        <p class="chapeau">Lorem ipsum dolor sit amet.</p>
    </hgroup>

    <nav> <!-- liens de navigation (menu, fil d'ariane, table des matières, index etc.) -->
        <ul>
            <li><a href=""></a>Lorem ipsum</li>
            <li><a href=""></a>Lorem ispum</li>
        </ul>
    </nav>

</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/footer.php"; ?>