
<?php
include_once 'db_connect.php';
include 'marche.html';


$lieu= $_POST['lieuMarche'];
$qualite= $_POST['qualiteMarche'];
if(empty($lieu) || empty($qualite)){
    echo("<p align='center' class='text-warning lead'><span class='glyphicon  glyphicon-warning-sign'></span> Erreur : Un ou plusieurs champs sont vides. </p>
");
}
else{
$sql = "INSERT INTO marche(lieu,qualité) VALUES ('$lieu','$qualite');";


$req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error());
echo("<center><p class='surligne'>Marché ajouté avec succès</p></center>");

}


?>

