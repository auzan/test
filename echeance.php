<?php
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/dist/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="icones/favicon.png" />
    </head>
    <body>
        <nav role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">MAJ WSD</a>
                </div>
            <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li><a href="produit.php">Nouveau produit</a></li>
                        <li><a href="marche.php">Nouveau marché</a></li>
                        <li><a href="echeance.php">Nouvelle échéance</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Création d'une échéance</h1>
        <hr>
        <div class="container">
            <form  class="form-horizontal" method='post' action='traitementFormEcheance.php'>
                <div class="form-group">
                    <label class="control-label col-xs-2">Nom</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="nomEcheance" placeholder="Nom de l'échéance">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-2">Produit</label>
                    <select class="form-control drop" id="sel1" name ='produit'>
                        <option value="" selected disabled>Séléctionnez un produit..</option>
                       <?php
                            $sql= "SELECT * FROM produit;";
                            $req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error());

                            while($donnees = mysqli_fetch_array($req))
                            {
                                $id= $donnees['idp'];
                                $nom = $donnees['nom'];
                            echo "<option id='$nom' value='".$id."'>$nom</option>";
                            echo $nom.value;
                        }
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-2">Marché</label>
                    <select class="form-control drop" id="sel2" name='marche'>
                        <option value="" selected disabled>Séléctionnez un marché..</option>
                     <?php
                        $sql= "SELECT * FROM marche;";
                        $req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error());

                        while($donnees = mysqli_fetch_array($req))
                        {
                            $idm =$donnees['idm'];
                            $lieu=$donnees['lieu'];
                           echo "<option  value='".$idm."'>$lieu</option>";
                        }
                     ?>
                    </select>
                </div>
                 <div class="form-group" >
                    <label class="control-label col-xs-2">Date de début</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="datepickers" name="dateDebEcheance" placeholder="Date de début de l'échéance">
                    </div>
                 </div>
                <div class="form-group" >
                    <label class="control-label col-xs-2">Date de fin</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="datepickers1" name="dateDFinEcheance" placeholder="Date de fin de l'échéance">
                    </div>
                 </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
        <script src="css/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="css/dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="css/dist/js/bootstrap-datepicker.fr.js" type="text/javascript"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datepickers').datepicker({
                    format: "dd/mm/yyyy", language: "fr", daysOfWeekDisabled: "0,6"
                });  
            
            });
        </script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datepickers1').datepicker({
                    format: "dd/mm/yyyy", language: "fr",  daysOfWeekDisabled: "0,6"
                });  
            
            });
        </script>
    </body>
</html>