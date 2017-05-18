<?php

require_once "../Class/Commande.class.php";

$stock = new Commande();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock->insert($_POST);

    header("Location: listCommandes.php");
}

?>


<?php require_once "admin_header.php"; ?>

    <div class="body-admin col-lg-12">
        <div class="row">
            <div class="col-lg-10  col-lg-offset-1 content-admin">
                <h2 class="col-lg-12 text-center">Ajout Revue</h2>
                <form action="" method="post">
                    <input type="text" name="titre" placeholder="Titre" class="col-lg-6  col-lg-offset-3 admin-input">
                    <input type="text" name="numero" placeholder="Numéro" class="col-lg-6  col-lg-offset-3 admin-input">
                    <label class="col-lg-2 col-lg-offset-3">PDF</label><input name="pdf" class="col-lg-4" type="file">
                    <input name="date" type="date" class="col-lg-6  col-lg-offset-3 admin-input">

                    <label class="col-lg-2 col-lg-offset-3">Image</label><input name="img" class="col-lg-4" type="file">
                    <input type="submit" class="col-lg-6  col-lg-offset-3 submit-admin">
                </form>
            </div>
        </div>
    </div>
<?php require_once "admin_footer.php"; ?>