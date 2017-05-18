<?php

require_once 'connect.php';
require_once "functions.php";
not_log();
require_once "header4.php";

// AFFICHER LES ENTREES DE LA BDD ( READ )

$sql = "SELECT `id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at` FROM `users`;";

$users = $pdo->prepare($sql); // On prépare la requete SQL

$users->execute(); // On éxécute la requete SQL

?>

    <h2 class="title-achats">Panel Admin - Utilisateurs</h2>
     <table class="table-achats">
         <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>mot de passe</th>
            <th>date d'inscription</th>
         </tr>
         
        
            <?php
            while($row = $users->fetch(PDO::FETCH_ASSOC)):?>
                 <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['confirmed_at'] ?></td>
                </tr>
            <?php endwhile; ?>
       
     </table>


<?php
require_once "footer.php";