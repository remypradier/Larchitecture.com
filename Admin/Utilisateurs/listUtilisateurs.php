<?php

require_once "../Class/Utilisateur.class.php";

$stock = new Utilisateur();

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
                        <th>Numéro</th>
                        <th>Titre</th>
                        <th>Fichier</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($afficheAll as $affichage) : ?>
                    <tr>
                        <td><?= $affichage['id'] ?></td>
                        <td><?= $affichage['id'] ?></td>
                        <td><?= $affichage['id'] ?></td>
                        <td><a href="detailsUtilisateurs.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Modifier</button></a></td>
                        <td><a href="deleteUtilisateurs.php?id=<?= $affichage['id'] ?>"><button type="button" class="btn btn-default col-lg-10 col-lg-offset-1">Supprimer</button></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="addUtilisateurs.php" class="col-lg-6 col-lg-offset-3 add-admin text-center">Ajouter</a>
        </div>
    </div>
</div>
<?php require_once "admin_footer.php"; ?>
