<!DOCTYPE html>
<html lang="fr">

<head> <!-- metadonnées de la page -->
    <meta charset="utf-8"> <!-- encodage de la page ; utf-8 = caractères spéciaux -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"> <!-- pour adpatation du site vers les terminaux mobiles -->
    <meta name="color-scheme" content="light dark"> <!-- prise en charge du mode sombre -->

    <!-- liens 
            attributs:
                href: url de la ressource
                hreflang: langue
                media: type de média auquel s'applique la ressource pour les feuilles de style ; valeur = requête média
                type: type MIME de contenu ; avec rel="preload", le fichier n'est pas téléchargé si le navigateur ne le prend pas en charge
                rel: relation avec la ressource liée
                    canonical: url préférée du document 
                    alternate: alternative du document 
                    author: auteur du document
                    licence: couvert par le copyright
                    help: aide contextuelle
                    icon: favicon
                    stylesheet: feuille de style ou de script
                    prev: document précédent dans la série du document actuel
                    next: document suivant dans la série du document actuel
                    external: ne fait pas partie du même site
                    nofollow: ne doit pas être référencé par les moteurs de recherche
                    noopener: ne doit pas avoir accès à la page actuelle /!\ toujours utiliser sur les liens externes !!! (ou pas...) Question de sécurité...
                    preconnect: connection préemptive
                    prefetch: mise en cache
                    preload: mise en cache en fonction de l'attribut as
                    prerender: récupération préemptive
                as: type de contenu chargé ; déterminer la priorité du contenu et la politique de sécurité ; utilisé avec rel="preload" ou "prefetch" -->
    <link rel="icon" href="./assests/images/logo/Logo_150.svg"> <!-- favicon ; affiché dans l'onglet -->

    <!-- référencement -->
    <title>Static test | <?= $page_title ?></title> <!-- titre de la page ; affiché également dans l'onglet -->
    <meta name="author" content="Noémie Koelblen"> <!-- auteur -->
    <meta name="keywords" content=""> <!-- mots clefs -->
    <meta name="description" content=""> <!-- extrait -->
    <!-- comportement des robots d'indexation
            attribut content:
                index: indexer la page
                noindex: ne pas indexer la page
                follow: suivre les liens dans la page
                nofollow: ne pas suivre les liens dans la page
                noarchive: ne pas mettre en cache (Google, Yahoo)
                nocache: ne pas mettre en cache (Bing)
                nosnippet: ne pas afficher la description de la page dans les réusltats (Google)
                noydir: ne pas afficher la description de la page dans les réusltats (Yahoo)
                noimageindex: ne pas afficher la page comme page de référence des images -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex"> <!-- synonyme de robots ; suivi uniquement par Google -->
    <meta name="slurp" content="noindex"> <!-- synonyme de robots ; suivi uniquement par Yahoo-->
</head>