<?php $page_title = "Formulaire";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./form.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <!--
attributs universels :
    contenteditable (true/false): édition de l'élément par l'utilisateur
    inputmode: type de contenu saisi déterminant la configuration du clavier virtuel
    autocapitalize: converti en majuscules le texte saisi
        on / sentences: majuscule en début de phrase
        words: majuscule en début de mot
        characters: majuscules
-->
    <!-- formulaire
            attributs:
                autocomplete (off/on) : autocomplétion des champs
                name: nom du formulaire, unique
                action: url traitant l'envoi du formulaire
                method: méthode HTTP utilisée pour l'envoi des données au serveur
                    post: données envoyées comme corps de la requête
                    get (par défaut): données annexées à l'URL avec un séparateur ?
                    dialog: lorsque le formulaire se trouve à l'intérieur d'un dialog, ferme la boîte de dialogue
                target: contexte d'affichage de la réponse, voir a -->
    <form id="formulaire" method="get"> <!-- formulaire -->

        <!-- contrôles
                    attributs communs:
                        type: type de contrôle à afficher ; text par défaut
                        name (obligatoire): nom associé au contrôle, envoyé avec la valeur du contrôle ; unique, sauf pour les boutons radios
                        value: valeur initiale du contrôle
                        pattern: format de validation
                        placeholder: exembple de valeur attendue
                        readonly (sans valeur): non éditable
                        required (sans valeur): obligatoire
                        disabled (sans valeur): désactivé, non envoyé avec le formulaire
                        form: formulaire auquel le champ est rattaché
                        inputmode: type de clavier universel à utiliser
                            none, text, tel, url, email, numeric, decimal, search
                        max: valeur maximale acceptée
                            s'applique à date, month, week, time, datetime-local, number, range
                        min: valeur minimal acceptée
                            s'applique à date, month, week, time, datetime-local, number, range
                        maxlength: nombre maximal de caractères
                            s'applique à text, textarea, search, url, tel, email, password
                        minlength: nombre minimal de caractères
                            s'applique à text, textarea, search, url, tel, email, password
                        autocomplete: remplissage automatique du formulaire
                            name: nom complet de la personne
                            honorific-prefix: civilité
                            given-name: prénom
                            additional-name: deuxième prénom
                            family-name: nom de famille
                            honorific-suffix: suffixe (Jr. etc.)
                            nickname: surnom
                            email: adresse mail
                            username: nom d'utilisateur
                            new-password: nouveau mot de passe (propose un outil de création de mot de passe sécurisé et évite au navigateur de saisir automatiquement le mot de passe actuel)
                            current-password: mot de passe actuel
                            one-time-code: code à usage unique
                            organization-title: titre du pose au sein d'une organisation
                            organization: organisation (entreprise, association...)
                            street-adress: adresse postale
                            adress-line1, adress-line2, adress-line3: lignes individuelles de l'adresse
                            country: code de pays
                            country-name: nom de pays
                            postal-code: code postal
                            cc-name: nom complet indiqué sur une carte bancaire
                            cc-number: numéro de mode de paiement (carte bancaire, compte...)
                            cc-exp: date d'expiration de la méthode de paiement
                            cc-csc: cryptogramme du moyen de paiement
                            cc-type: type de moyen de paiement
                            transaction-currency: devise utilisée
                            transaction-amount: montant de la transaction
                            langage: langue
                            bday: date de naissance
                            bday-day: jour de naissance
                            dbay-month: mois de naissance
                            bday-year: année de naissance
                            sex: genre
                            tel: numéro de téléphone incluant l'identifiant du pays
                            tel-country-code: indicateur du pays
                            tel-national: numéro de téléphone complet sans l'indicateur du pays
                            tel-extension: numéro de poste
                            impp: url pour un protocole de messagerie instantannée
                            url: url
                            photo: url d'une image
                         -->

        <!-- case à cocher
                    attributs:
                        checked (sans valeur): coché par défaut-->
        <label for="case-a-cocher"></label>
        <input type="checkbox" id="case-a-cocher" name="case-a-cocher">

        <label for="couleur"></label>
        <input type="color" id="couleur" name="couleur"> <!-- sélecteur de couleur -->

        <!-- date
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 1 jour -->
        <label for="date"></label>
        <input type="date" id="date" name="date">

        <!-- date et heure
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 60 secondes -->
        <label for="date-et-heure"></label>
        <input type="datetime-local" id="date-et-heure" name="date-et-heure"> <!-- date et heure -->

        <!-- email
                    attributs:
                        multiple (sans valeur): saisie de plusieurs adresses mail séparées par des virgules -->
        <label for="email"></label>
        <input type="email" id="email" name="email"> <!-- email -->

        <!-- fichier
                    attributs:
                        capture: appareil utilisé pour capturer un nouveau fichier (micro, caméra...)
                        multiple (sans valeur): sélectionner plusieurs fichiers -->
        <label for="fichier"></label>
        <input type="file" accept="" id="fichier" name="fichier"> <!-- fichier -->

        <input type="hiden"> <!-- contrôle masqué dont la valeur est envoyée au serveur -->

        <!-- mois et année
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 1 mois -->
        <label for="mois"></label>
        <input type="mont" id="mois" name="mois">

        <!-- nombre
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 1 ; pour autoriser les nombres décimaux : "any" -->
        <label for="nombre"></label>
        <input type="number" id="nombre" name="nombre"> <!-- nombre -->

        <label for="mot-de-passe"></label>
        <input type="password" id="mot-de-passe" name="mot-de-passe"> <!-- mot de passe -->

        <fieldset> <!-- groupe de contrôles ; attribut disabled (sans valeur): contrôles désactivés -->
            <legend>Lorem ipsum</legend> <!-- légende du groupe de contrôles -->
            <!-- sélection d'une seule valeur parmi un groupe de valeurs
                        attributs:
                            checked (sans valeur): sélectionné par défaut  -->
            <input type="radio" id="bouton-radio1" name="bouton-radio"> <!-- bouton radio -->
            <input type="radio" id="bouton-radio2" name="bouton-radio">
        </fieldset>

        <!-- jauge horizontale
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 1 ; pour autoriser les nombres décimaux : "any" -->
        <label for="jauge"></label>
        <input type="range" id="jauge" name="jauge" min="0" max="10">

        <label for="telephone"></label>
        <input type="tel" id="telephone" name="telephone"> <!-- numéro de téléphone -->

        <label for="texte"></label>
        <input type="text" id="texte" name="texte"> <!-- champ de texte, par défaut -->

        <!-- heure
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 60 secondes-->
        <label for="heure"></label>
        <input type="time" id="heure" name="heure">

        <label for="url"></label>
        <input type="url" id="url" name="url"> <!-- url -->

        <!-- semaine et année
                    attributs:
                        step: récurrence de la suite arithmétique ; par défaut = 1 semaine -->
        <label for="semaine"></label>
        <input type="week" id="semaine" name="semaine"> <!-- numéro de semaine et année -->

        <!-- liste d'options
                    attributs:
                        multiple (sans valeur): sélection de plusieurs options
                        size: nombre de lignes visibles à l'écran en même temps -->
        <label for="liste2"></label>
        <select id="liste2" name="liste2">
            <optgroup label="Groupe 1"> <!-- groupe d'options ; non sélectionnable; non imbricable -->
                <!-- option
                            attributs:
                                disabled (sans valeur): non sélectionnable
                                selected: sélectionnée à l'état initial 
                                value: valeur à envoyer au formulaire (contenu si non définie) -->
                <option>Lorem</option>
                <option>Ipsum</option>
            </optgroup>
            <optgroup label="Groupe 2"></optgroup>
            <option>Lorem</option>
            <option>Ipsum</option>
        </select>

        <!-- liste d'options non restrictive avec saisie et autocomplétion
                    types acceptés: text, search, url, tel, email, date, month, week, time, datetime-local, number, range, color -->
        <label for="liste"></label> <!-- en ligne -->
        <input type="text" list="liste" id="liste" name="liste"> <!-- liste d'options ; en ligne -->
        <datalist id="liste"> <!-- ensemble d'options d'un ccontrôle -->
            <option value="Lorem">Lorem</option>
            <option value="Ipsum">Ipsum</option>
        </datalist>

        <!-- zone de texte sur plusieurs lignes
                    attributs:
                        cols: largeur visible de contrôle en largeur de caractères
                        rows: nombre de lignes visibles
                        spellcheck (true/false): vérification orthographique et gramaticale
                        wrap: retour à la ligne
                            hard: sauts de ligne automatique afin que chaque ligne ne soit pas plus longue que la largeur du contrôle (cols doit être défini)
                            soft (par défaut): pas d'ajout de saut de ligne supplémentaire
                            off -->
        <label for="zone-de-texte"></label>
        <textarea id="zone-de-texte" name="zone-de-texte"></textarea>

        <!-- bouton
                    attributs:
                        form: formulaire parent par défaut
                        type:
                            submit (par défaut) : soumission du formulaire
                            reset: réinitialisation de tous les contrôles du formulaire
                            button: aucun comportement par défaut, à configurer à l'aide de scripts
                -->
        <button>Envoyer</button>

    </form>

    <form oninput="resultat.value=parseInt(a.value)+parseInt(b.value);">
        <label>a</label>
        <input type="number" id="a" name="a" value="">
        +
        <label>b</label>
        <input type="number" id="b" name="b" value="">
        =
        <output name="resultat"></output> <!-- résultat d'un calcul ou d'une action utilisateur -->
    </form>

    <search> <!-- conteneur de formulaire de recherche -->
        <form action="./search">
            <input type="search" id="rechercher" name="rechercher"> <!-- contrôle de recherche -->
            <button>Rechercher</button>
        </form>
    </search>

</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>