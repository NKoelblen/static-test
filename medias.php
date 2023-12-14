<?php $page_title = "Médias";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./medias.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <!-- élément audio embarqué ; en ligne
            attributs:
                src: source du fichier
                controls (sans valeur): affichage des contrôles de lecture
                autoplay (true/false): lecture automatique (à éviter)
                loop (true/false): lecture en boucle
                muted (true/false): muet
                preload: mise en cache
                    none: aucune
                    metadata: seulement les méta-données (recommandée)
                    auto: tout le fichier (par défaut si autoplay=true)
            -->
    <audio src="" title="" controls preload="metadata">

        <!-- sous-titres .vtt (audio et video)
                    attributs:
                        default; piste activée par défaut (une seule piste avec cet attribut)
                        kind: utilisation de la piste
                            subtitles (par défaut): sous-titres
                            captions: description de l'audio, adapté aux personnes malentendantes
                            descriptions: description du contenu vidéo, adapté aux personnes malvoyantes
                            chapters: chapitres du media
                            metadata: piste utilisée par des scripts, non visible pour l'utilisateur
                        label: titre associé à la piste
                        src: url du fichier
                        srclang: langue de la piste (obligatoire si kind="subtitles") -->
        <track src="">


        <a href=""></a>
    </audio>

    <picture> <!-- conteneur d'une ou plusieurs sources pour une image -->
        <!-- ressource média poour picture, audo ou video
                    attributs:
                        media: mediaquery (uniquement pour picture)
                        src (obligatoire pour audio et video , ignorée pour picture): addresse de la ressource
                        srcset (uniquement pour picture): liste séparée par des virgules, ensemble d'images utilisées comme sources
                            url pointant vers l'image
                            largeur (100w)
                            ou densité de pixel (1.0x)
                        sizes (uniquement pour picture): condition de taille, en lien avec l'attribut srcset, liste séparée par des virgules
                        type: type MIME de la ressource -->
        <source srcset="" media="">
        <source srcset="" media="">>
        <!-- image ; en ligne
                attributs:
                    alt: description alternative
                    src: url
                    srcset: plusieurs sources possibles
                    sizes: ensemble de tailles de source possible fournies par srcset, séparées par des virgules
                        taille de source = condition de média et valeur de taille de source (sauf pour la dernière) :
                        (max-width: Npx) Npx
                    decoding: chargement de l'image
                        sync: avec le reste du contenu
                        async: après le reste du contenu
                        auto
                    usemap: url partielle (#) d'une carte associée -->
        <img src="" alt="">
    </picture>

    <map name="carte"> <!-- image cliquable divisée en régions ; en ligne ; attribut name unique obligatoire -->
        <!-- zone de la carte ; associée à un lien
                attributs :
                (voir a pour les attributs de lien)
                alt: texte alternatif
                shape : forme
                    rect: rectangle
                    circle: cercle
                    poly: polygone
                    default: toute la zone
                coords: coordonnées de la forme, en pixels
                    pour rect: x1,y1,x2,y2 (coordonnées du coin supérieur gauche et inférieur droit du rectangle)
                    pour circle: x,y,radius (coordonnées du centre du cercle et du rayon)
                    pour poly: x1,y1,x2,y2,...,xn,yn (coordonnées des coins du polygone) -->
        <area shape="" coords="" href=""> <!-- zone de la carte associée à un lien -->
        <area shape="" coords="" href="">
    </map>
    <img usemap="#carte" src="">

    <svg></svg> <!-- en ligne -->

    <!-- contenu vidéo
                attributs:
                    autoplay (sans valeur): lecture automatique (à éviter)
                    buffered: intervalle temporelle de mise en mémoire tampon
                    controls (sans valeur): contrôles de lecture
                    loop (sans valeur): lecture en boucle
                    muted (sans valeur): sans le son
                    playsinline (sans valeur): lecture au sein de la zone de lecture
                    preload: chargement de la video
                        none: pas de préchargement
                        metadata: seules les métadonnées sont récupérées (conseillé)
                        auto: téléchargement du fichier entier même si l'utilisateur ne s'en sert pas
                    poster: url de la vignette à utiliser
                    src: url du fichier
                    height: hauteur de la zone
                    width: largeur de la zone  -->
    <video></video> <!-- en ligne -->

</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>