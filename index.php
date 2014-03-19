<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $user='root';
$pass='tigerman';
$dbh = new PDO('mysql:host=localhost;dbname=Personne', $user, $pass);
foreach($dbh->query('SELECT * from Personne') as $row) {
     $nom=$row['nom'];
     $id=$row['id_pers'];
     $num=$row['num_tel'];
     echo '<tr>';
     echo "<td>$nom</td><$id</td><td>$num</td>";
     echo'</td>';
     
}
 $dbh = null;
 
     
 

        ?>
    </body>
</html>
