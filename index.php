<?php $page_title = "Modèle de page type";
$test = new DateTime();
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./index.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main> <!-- contenu de la page ; unique -->

    <!--
attributs universels :
    class: liste de classes séparées par des espaces permettant de catégoriser les éléments
    id: identifiant unique au sein de la page
    hidden (true/false): affichage de l'élément
cf. également attibuts utilisés pour les gestionnaires d'évènements JavaScript, déclarés directement sur les éléments
-->
    <?php require "./inc/template_parts/page-header.php"; ?>
    <section> <!-- groupe de contenu thématique -->
        <hgroup>
            <h2>Titre de section 1</h2>
            <p>Sous-titre</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </hgroup>
        <p>Lorem ipsum dolor sit amet. Rem excepturi voluptatibus ad repudiandae officiis est quis inventore qui architecto ipsum sed eius sapiente. Est dolores consequuntur est inventore possimus ut sequi voluptas a sint dolores non tempore fugit ut minima quod nam harum eveniet! In ipsa maiores eum minus quis ad tenetur autem et dolores velit. Sed laborum doloribus et sapiente voluptatem ut quia voluptatem et modi mollitia a quaerat provident eum deleniti quibusdam?</p>
        <p>Qui debitis asperiores ut corporis asperiores id dolor rerum ut blanditiis maiores et sequi quae. Qui quae neque qui eius impedit qui voluptatem laboriosam. Qui adipisci eius qui quis quia est voluptatem Quis id consequatur illo est delectus quos ad omnis exercitationem est excepturi saepe. Sit ullam nobis aut quia sunt a odit consequatur ex possimus eligendi et ratione dicta.</p>
        <p>Et consequatur earum eos voluptas sint qui deserunt placeat aut iure sint. Sit labore reprehenderit est eligendi consequatur vel nesciunt ducimus et aperiam vitae cum omnis omnis! Ut reprehenderit autem et consequatur enim sed voluptates nihil!</p>
    </section>
    <section>
        <h2>Titre de section 2</h2>
        <article> <!-- contenu d'autres publications ; idéalement, doit être identifié par un titre -->
            <hgroup>
                <h3>Titre d'article 1</h3>
                <p>Sous-titre</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </hgroup>
            <p>Lorem ipsum dolor sit amet. Rem excepturi voluptatibus ad repudiandae officiis est quis inventore qui architecto ipsum sed eius sapiente. Est dolores consequuntur est inventore possimus ut sequi voluptas a sint dolores non tempore fugit ut minima quod nam harum eveniet! In ipsa maiores eum minus quis ad tenetur autem et dolores velit. Sed laborum doloribus et sapiente voluptatem ut quia voluptatem et modi mollitia a quaerat provident eum deleniti quibusdam?</p>
            <p>Qui debitis asperiores ut corporis asperiores id dolor rerum ut blanditiis maiores et sequi quae. Qui quae neque qui eius impedit qui voluptatem laboriosam. Qui adipisci eius qui quis quia est voluptatem Quis id consequatur illo est delectus quos ad omnis exercitationem est excepturi saepe. Sit ullam nobis aut quia sunt a odit consequatur ex possimus eligendi et ratione dicta.</p>
            <p>Et consequatur earum eos voluptas sint qui deserunt placeat aut iure sint. Sit labore reprehenderit est eligendi consequatur vel nesciunt ducimus et aperiam vitae cum omnis omnis! Ut reprehenderit autem et consequatur enim sed voluptates nihil!</p>
        </article>
        <article>
            <h3>Titre d'article 2</h3>
            <p>Lorem ipsum dolor sit amet. Rem excepturi voluptatibus ad repudiandae officiis est quis inventore qui architecto ipsum sed eius sapiente. Est dolores consequuntur est inventore possimus ut sequi voluptas a sint dolores non tempore fugit ut minima quod nam harum eveniet! In ipsa maiores eum minus quis ad tenetur autem et dolores velit. Sed laborum doloribus et sapiente voluptatem ut quia voluptatem et modi mollitia a quaerat provident eum deleniti quibusdam?</p>
            <p>Qui debitis asperiores ut corporis asperiores id dolor rerum ut blanditiis maiores et sequi quae. Qui quae neque qui eius impedit qui voluptatem laboriosam. Qui adipisci eius qui quis quia est voluptatem Quis id consequatur illo est delectus quos ad omnis exercitationem est excepturi saepe. Sit ullam nobis aut quia sunt a odit consequatur ex possimus eligendi et ratione dicta.</p>
            <p>Et consequatur earum eos voluptas sint qui deserunt placeat aut iure sint. Sit labore reprehenderit est eligendi consequatur vel nesciunt ducimus et aperiam vitae cum omnis omnis! Ut reprehenderit autem et consequatur enim sed voluptates nihil!</p>
        </article>
    </section>
</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>