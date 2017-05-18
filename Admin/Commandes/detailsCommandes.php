<?php
session_start();

require_once "admin_header.php";

require_once "../Class/Commande.class.php";
require_once "../Class/Session.class.php";

$session = new Session();
$stock = new Commande();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock->update($_POST);

    header("Location: listCommandes.php");
}

$affiche = $stock->select($_GET['id']);
$session->sessionAuth();
?>

					<div class="body-admin col-lg-12">	
						<div class="row">	
							<div class="col-lg-10  col-lg-offset-1 content-admin">
								<h2 class="col-lg-12 text-center">Modification Revue</h2>
								<form action="" method="post">
									<input type="text" name="titre" placeholder="Titre" class="col-lg-6  col-lg-offset-3 admin-input" value="<?= $affiche['id'] ?>">
									<input type="text" name="numero" placeholder="Numéro" class="col-lg-6  col-lg-offset-3 admin-input" value="<?= $affiche['id'] ?>">
									<label class="col-lg-2 col-lg-offset-3">PDF</label><input class="col-lg-4" type="file" value="<?= $affiche['id'] ?>">
									<input type="date" class="col-lg-6  col-lg-offset-3 admin-input" value="<?= $affiche['id'] ?>">

									<label class="col-lg-2 col-lg-offset-3">Image</label><input class="col-lg-4" type="file">
									<input type="submit" class="col-lg-6  col-lg-offset-3 submit-admin">
								</form>
							</div>
						</div>
					</div>
<?php require_once "admin_footer.php"; ?>