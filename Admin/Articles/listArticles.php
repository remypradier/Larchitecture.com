<?php

require_once "../Class/Article.class.php";

$stock = new Article();

$afficheAll = $stock->selectAll();

require_once "admin_header.php";
?>

<div class="body-admin col-lg-12">
    <div class="row">
        <div class="col-lg-10  col-lg-offset-1 content-admin">
            <h2 class="col-lg-12 text-center">Revue</h2>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Architectes</th>
                        <th>Réalisations</th>
                        <th>Rubrique</th>
                        <th>Lieu</th>
                        <th>Départeme</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($afficheAll as $affichage) : ?>
                    <tr>
                        <td><?= $affichage['date'] ?></td>
                        <td><?= $affichage['architectes'] ?></td>
                        <td><?= $affichage['realisations'] ?></td>
                        <td><?= $affichage['rubrique'] ?></td>
                        <td><?= $affichage['lieu'] ?></td>
                        <td><?= $affichage['departement'] ?></td>
                        <td><a href="detailsArticles.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Modifier</button></a></td>
                        <td><a href="deleteArticles.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Supprimer</button></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="addArticles.php" class="col-lg-6 col-lg-offset-3 add-admin text-center">Ajouter</a>
        </div>
    </div>
</div>
<?php require_once "admin_footer.php"; ?>
