<?php $page_title = "Tableau";
$page_date = new DateTime();
$page_date->setTimestamp(filectime("./table.php"));

require "./inc/template_parts/head.php";
require "./inc/template_parts/site-header.php"; ?>

<main>

    <?php require "./inc/template_parts/page-header.php"; ?>

    <table> <!-- tableau -->
        <caption></caption> <!-- légende -->

        <!-- colonnes
                    groupe de colonnes
                        attribut span: nombre de colonnes ; ne doit pas être défini si le colgroup contient des éléments col -->
        <colgroup> <!-- groupe de colonnes -->
            <col> <!-- colonne -->
            <col span="2"> <!-- 2 colonnes -->
            <col span="2">
        </colgroup>

        <thead>
            <tr> <!-- ligne -->
                <td></td>
                <!-- entête de ligne ou de colonne
                            attributs:
                                colspan: nombre de colonnes
                                rowspan: nombre de lignes
                                headers: id de l'élément th s'appliquant à l'élément
                                scope: cellules auxquelles l'élément est lié
                                    row: toutes les cellules de la ligne
                                    col: toutes les cellules de la colonne
                                    rowgroup: toutes les cellules du groupe de ligne
                                    colgroup: toutes les cellules du groupe de colonne -->
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody> <!-- corps du tableau -->
            <tr>
                <th scope="row"></th>
                <!-- cellule
                            attributs:
                                colspan: nombre de colonnes
                                rowspan: nombre de lignes
                                headers: id de l'élément th s'appliquant à la cellule -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot> <!-- pied de tableau -->
    </table>
</main>

<?php require "./inc/template_parts/aside.php";
require "./inc/template_parts/site-footer.php"; ?>