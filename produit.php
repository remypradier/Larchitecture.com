<?php
/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 17/05/2017
 * Time: 15:02
 */

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/revu.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revue L'Architecture de votre région n°284 -Île de France- 2017</title>
</head>
<body>
<header></header>
<main class="pageproduit">
   <h1 class="h1produit">Ile-De-France</h1>
    <h2 class="h2produit" >Revue N°284-2017</h2>
    <div>
        <article class="articleproduit">
            <figure>
                <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                <figcaption>
                    <h2>Région Ile de France</h2>
                    <p>Revue n°284 - 2017</p>
                    <h3>Lire en ligne</h3>
                </figcaption>
            </figure>
        </article>
    </div>
<div class="commande">
    <h2 class="commande">Commande</h2>
    <form action="POST" action="" class="quantite">
        <p>
        <label for="quantite">Quantité</label>
        <input type="number" min="0"/>
        </p>
    </form>
    <form action="POST" action="">
        <p>
            <label for="region">Zone Géographique</label>
            <select name="region" size="1" id="region">
                <optgroup label="Métropole">
                    <option value="Ile de France">Ile de France</option>
                    <option value="Alsace">Alsace</option>
                    <option value="Aquitaine">Aquitaine</option>
                    <option value="Bourgogne">Bourgogne</option>
                    <option value="Bretagne">Bretagne</option>
                    <option value="Centre">Région Centre</option>
                    <option value="Champagne-Ardenne">Champagne-Ardenne</option>
                    <option value="Corse">Corse</option>
                    <option value="Franche-Conté">Franche-Conté</option>
                    <option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
                    <option value="Limousin">Limousin</option>
                    <option value="Lorraine">Lorraine</option>
                    <option value="Lorraine">Lorraine</option>
                    <option value="Midi-Pyrénées">Midi-Pyrénées</option>
                    <option value="Nord Pas de Calais">Nord Pas de Calais</option>
                </optgroup>
                <optgroup label="Dom-Tom">
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guyane">Guyane</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Réunion">Réunion</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Saint-Barthélemy">Saint-Bartélemy</option>
                    <option value="Saint Martin">Saint Martin</option>
                </optgroup>
                <optgroup label="Etranger">
                    <option value="Belgique">Belgique/Belgie</option>
                    <option value="Suisse">Suisse</option>
                </optgroup>
            </select>
        </p>
    </form>
    <p>Prix : 22€ (19€ + 3€ de livraison)</p>
    <input type="submit" name="ajouter" value="Ajoutez à mon panier"/>
</div>
</main>
<footer>
</footer>
</body>
</html>
