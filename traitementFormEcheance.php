
<?php
include_once 'db_connect.php';
include 'echeance.php';

$nomE = $_POST['nomEcheance'];
$idNom = $_POST['$nom.value'];
$produit= $_POST['produit'];
$marche= $_POST['marche'];



//if(empty($nom) || empty($produit)){
//    echo("<p align='center' class='text-warning lead'><span class='glyphicon  glyphicon-warning-sign'></span> Erreur : Un ou plusieurs champs sont vides. </p>
//");
//}
//else{
$sql = "INSERT INTO echeance(nome,idp) VALUES ('$nomE', '$idNom');";


$req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error());
echo("<center><p class='surligne'>Marché ajouté avec succès</p></center>");
echo($idNom);

//}


?>

