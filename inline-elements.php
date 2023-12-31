<?php $page_title = "En ligne";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./inline-elements.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <!-- liens hypertextes
            attributs :
            href: url
            target: contexte de navigation
                _self: par défaut
                _blank: nouvel onglet
            rel: relation avec l'url
                external: ne fait pas partie du même site que la page actuelle
                nofollow: ne doit pas être référencé par les moteurs de recherche
                noopener: ne doit pas avoir accès à la page actuelle /!\ toujours utiliser sur les liens externes !!! 
                next: page suivante d'une série dont fait partie la page actuelle
                prev: page précédente d'une série dont fait parie la page actuelle
                search: ressource pouvant être utilisée pour effectuer une recherche sur le site -->
    <a href="https://www.w3.org/" target="_blank" rel="external nofollow noopener"></a> <!-- url absolue -->
    <a href="index.html"></a> <!-- url relative -->
    <a href="#"></a> <!-- haut de page -->
    <a href="#id"></a> <!-- ancre -->
    <a href="mailto:j.smith@example.com"></a> <!-- adresse email -->
    <a href="tel:+33123456789"></a> <!-- téléphone -->

    <abbr title=""></abbr> <!-- abréviation ; attribut title: description -->

    <b></b> <!-- gras -->

    <bdi></bdi> <!-- isolation bidirectionnelle ; par défaut, direction appliquée en fonction du contenu -->

    <br> <!-- saut de ligne -->

    <button type="button"></button> <!-- bouton sans comportement par défaut, à configurer grâce à un script ; pour les liens, privilégier a avec une classe bouton -->

    <code></code> <!-- fragment de code -->

    <data value=""></data> <!-- donnée rattachée à un contenu -->

    <!-- texte supprimé
                attributs:
                    cite: uri d'une ressource expliquant la modification
                    datetime: date et heure de la modification -->
    <del></del>

    <dfn></dfn> <!-- terme à définir -->

    <em></em> <!-- emphase, contenu accentué ; peut être imbriqués -->

    <i></i> <!-- italique -->

    <!-- élément externe intégré
                attributs:
                    allow: définition d'une politique de confidentialité selon l'origine (accès au micro, à la caméra, aux informations de batterie etc.)
                    allowfullscreen (true/false): plein écran
                    name: nom de l'élément
                    referrerpolicy: référent à utiliser lors de la récupération de la ressource
                        no-referrer: aucun référent envoyé
                        no-referrer-when-downgrade (par défaut): aucun référent envoyé lors d'une navigation non sécurisée
                        origin: origine de la page (schéma, hôte, port)
                        origin-when-cross-origin: navigations vers d'autres origines limitées aux schémas, hôtes et ports
                        same-origin: référent envoyé pour les même origines
                        strict-origin: seule l'origine du document est envoyée lorsque le protocole de sécurité est le même (HTTPS)
                        strict-origin-when-cross-origin: l'URL complète est envoyée pour les requêtes de même origine, seule l'origine est envoyée lorsque le protocole de sécurité est le même (HTTPS)
                        unsafe-url: origine et chemin ; peut entraîner des fuites d'origine ou de chemin vers des origines non sécurisées
                    sandbox: permissions sur le contenu, séparées par des espaces ; si vide, toutes les restrictions sont appliquées
                        allow-downloads: téléchargement après action de l'utilisateur
                        allow-forms: envoi de formulaires
                        allow-modals: ouverture de fenêtres modales
                        allow-orientation-lock: désactivation du verouillage de l'orientation de l'écran
                        allow-pointer-lock: utilisation de l'API Pointer Lock
                        allow-popups: déclenchement de fenêtres contextuelles
                        allow-popups-to-escape-sandbox: ouverture de nouvelles fenêtres hors de l'iframe
                        allow-same-origin
                        allow-scripts: exécution de scripts, mais pas de fenêtres contextuelles
                        allow-top-navigation: chargement de contenu depuis la page parente
                        allow-top-navigation-by-user-activation: chargement de contenu depuis la page parente après action de l'utilisateur
                    src: url de la page à intégrer
                    srcdoc: contenu de la page à intégrer
                    width: largeur
                    height: hauteur -->
    <iframe></iframe>

    <!-- texte inséré
                attributs:
                    cite: uri d'une ressource expliquant la modification
                    datetime: date et heure de la modification -->
    <ins></ins>

    <kdb></kdb> <!-- saisie clavier ; à combiner éventuellement avec samp -->

    <mark></mark> <!-- texte pertinent ; surligné -->

    <!-- jauge ; valeurs dans une intervalle donnée
                attributs:
                    value (obligatoire): valeur de la mesure
                    min: valeur minimale de la mesure
                    max: valeur maximale de la mesure
                    low: valeur maximale à partir de laquelle la mesure est considérée comme basse
                    optimum: valeur idéale pour la mesure
                    high: valeur minimale à partir de laquelle la mesure est considérée comme haute
                    form: id du formulaire -->
    <meter value=""></meter>

    <noscript></noscript> <!-- élément à afficher si JavaScript est désactivé -->

    <!-- barre de progression
                attributs:
                    max: valeur correspondant à la complétion de la tâche ; 1 par défaut
                    value: état de la complétion
                    /!\ si value est absent, la barre se déplace sur l'axe de progression -->
    <progress></progress>

    <q></q> <!-- citation ; attribut cite: url de la source -->

    <s></s> <!-- texte barré -->

    <samp></samp> <!-- réponse produite par un programme informatique -->

    <small></small> <!-- petits caractères -->

    <span></span> <!-- conteneur -->

    <strong></strong> <!-- texte d'importance particulière, en gras -->

    <sub></sub> <!-- texte en indice -->

    <sup></sup> <!-- texte en exposant -->

    <slot></slot>
    <template></template>

    <!-- période de temps
                attributs:
                    datetime: date et heure
                        année: 2023
                        année et mois : 2023-10
                        date: 2023-10-07
                        date sans année: 10-07
                        semaine: 2023-W43
                        heure: 07:46 / 07:46:39
                        date et heure: 2023-10-07T07:46:39 / 2033-10-07 07:46:39
                        durée: PT4H18M3S -->
    <time></time>

    <u></u> <!-- texte annoté avec des éléments non textuels, souligné-->

    <var></var> <!-- valeur dans une expression mathématique ou informatique, en italique-->

    <wbr> <!-- saut de ligne si nécessaire (pour utiliser un trait d'union à la place: &shy; ) -->

</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>