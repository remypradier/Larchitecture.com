<?php

require_once "connect.php";
require_once "header.php";

if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	$id = '1';
}

$sql = "SELECT
`title_product`,
`description`,
`price`
FROM `products`
WHERE id = :id;";

$prep = $pdo->prepare($sql);
$prep->bindValue(':id', $id, PDO::PARAM_INT);
$prep->execute();

$tab = $prep->fetch(PDO::FETCH_ASSOC);

?>

	<main class="Product-main clearfix">
		<nav class="Product-nav Arlequin clearfix">
			<ul>
				<li>
					<a href="product.php?id=1">
						<div>
							<img src="img_content/Product/berlingot.png">
						</div>
						<!--<span></span>-->
					</a>
				</li>
				<li>
					<a href="product.php?id=2">
						<div>
							<img src="img_content/Product/arlequin.png">
						</div>
						<!--<span class="visible"></span>-->
					</a>
				</li>
				<li>
					<a href="produit_dragees.php?id=3">
						<div>
							<img src="img_content/Product/dragees.png">
						</div>
						<!--<span></span>-->
					</a>
				</li>
				<li>
					<a href="produit_loukoum.php?id=4">
						<div>
							<img src="img_content/Product/loukoum.png">
						</div>
						<!--<span></span>-->
					</a>
				</li>
			</ul>
		</nav>
		<h2 class="Title"><?= $tab['title_product'] ?></h2>

		<iframe width="1400" height="920" src="God.php" frameborder="0" allowfullscreen scrolling="no">
		</iframe>
		
		<section>
			<div class="Description">
				<p><?= $tab['description'] ?></p>
				<h2><?= $tab['price'] ?>$</h2>
				<a href=""><h3>Ajouter au panier</h3></a>
			</div>
			<div class="Advices">
				<table>
					<tr>
						<td>
							<img src="img_layout/box.svg">
							<nav>
								<ul>
									<li>Envoi discret</li>
									<li>Livraison sous 4 jours ouvrés</li>
									<li>Paiement sécurisé</li>
								</ul>
							</nav>
						</td>
						<td>
							<img src="img_layout/info.svg">
							<nav>
								<ul>
									<li>Plusieurs tailles et coloris</li>
									<li>Surface douce en silicone</li>
									<li>Pile AAA</li>
								</ul>
							</nav>
						</td>
						<td>
							<img src="img_layout/idea.svg">
							<nav>
								<ul>
									<li>Sans allergènes</li>
									<li>Résistant à l'eau</li>
									<li>Extrémement silencieux!</li>
								</ul>
							</nav>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<div class="opinion">
			<h2>Les doux avis</h2>		
			<article>
				<img src="img_layout/chat.svg">
				<p>Simple, efficace. Bon produit pour découvrir les vibros. Vraiment très doux.</p>
			</article>	
			<article>
				<img src="img_layout/chat.svg">
				<p>Mon préféré en terme de forme, très drole, très esthétique!</p>
			</article>	
			<article>
				<img src="img_layout/chat.svg">
				<p>
					Je n'avais jamais acheté ce genre de produit. Il est en effet super doux, et il est très fin, donc ça fait vraiment une caresse légère...
					<br/>
					Je l'ai recommandé à plusieurs de mes copines et elles adorent.
				</p>
			</article>	
		</div>
		<div class="Add-opinion">
			<form>
				<input type="text" name="email" placeholder="Ajouter un commentaire...">
				<button type="submit" name="" value="">
					<img src="img_layout/arrow.svg" class="Arrow">
				</button>
			</form>
		</div>

	</main>
<?php require_once "footer.php";