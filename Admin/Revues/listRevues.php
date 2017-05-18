<?php

require_once "../Class/Revue.class.php";

$stock = new Revue();

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
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Fichier</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($afficheAll as $affichage) : ?>
                    <tr>
                        <td><?= $affichage['numero'] ?></td>
                        <td><?= $affichage['titre'] ?></td>
                        <td><?= $affichage['pdf'] ?></td>
                        <td><?= $affichage['date'] ?></td>
                        <td><?= $affichage['img'] ?></td>
                        <td><a href="detailsRevues.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Modifier</button></a></td>
                        <td><a href="deleteRevues.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Supprimer</button></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="addRevues.php" class="col-lg-6 col-lg-offset-3 add-admin text-center">Ajouter</a>
        </div>
    </div>
</div>
<?php require_once "admin_footer.php"; ?>
