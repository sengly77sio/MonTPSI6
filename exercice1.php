<table border=1>

 <?php


 $tab=array("Toto"=>"01,20,30,44,5,66,77,88,19");
 
 foreach($tab as $nom =>$num)
 {
     echo"<tr><td>$nom</td><td>$num</td></tr>";
     
 }

?>

</table>

<form method="GET" ACTION="index.php">
    <input type="text" name="nom"/>
    <input type="submit" value="Recherche" />
</form>

<?php

if (isset($_GET["nom"]))
{
    echo $tab[$_GET["nom"]];
    
}

?>
