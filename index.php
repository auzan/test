<?php
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel='icon' href='icones/favicon.png'/>
        <title>WSD</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, 'fra_fra');
        echo '<h1>' . utf8_encode(strftime("%A %d %B %Y")) . '</h1>';

        $mysqli->select_db("bdd-pm");


        $sql = 'SELECT * '
                . 'FROM echeance, concerner '
                . 'WHERE now() between dated and datef;';

        $req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error());
        echo '<table>'
        . '<tr>'
        . '<th>Echéance</th>'
        . '<th>Date début</th>'
        . '<th>Date fin</th>'
        . '<th>Achat</th>'
        . '<th>Vente</th>'
        . '<th>Traité</th>'
        . '</tr>';
        echo '<tr><th colspan="6">blé grain </th></tr>';
        //Valeurs du tableau
        while ($data = mysqli_fetch_array($req)) {
            echo '<tr>'
            . '<td>' . $data['nome'] . '</td>'
            . '<td>' . $data['dated'] . '</td>'
            . '<td>' . $data['datef'] . '</td>'
            . '<td><input type="text" value="'.$data['achat'].'"/></td>'
            . '<td><input type="text" value="'.$data['vente'].'"/></td>'
            . '<td><input type="text" value="'.$data['traite'].'"/></td>'
            . '</tr>';
        }
        echo '</table>';
        ?>
        <br/>
        <a class='lien' href='produit.php'>nouveau produit</a>
        <a href="marche.html" class='lien'>nouveau marché</a>
        <a href = "echeance.php" class='lien'>nouvelle échéance</a>
        
    </body>
</html>
