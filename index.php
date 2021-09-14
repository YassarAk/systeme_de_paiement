<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Système de paiement des frais de scolarité</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">TABLEAU DE BORD</h1>
                <h1 class="page-subhead-line">Bienvenue à <strong>Système de paiement ESA </strong>. "travail connexion
                    travail" </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">

            <div class="col-md-4">
                <div class="main-box mb-pink">
                    <a href="student.php">
                        <i class="fa fa-users fa-5x"></i>
                        <h5>Etudiant</h5>
                    </a>
                </div>
            </div>




            <div class="col-md-4">
                <div class="main-box mb-dull">
                    <a href="fees.php">
                        <i class="fa fa-inr fa-5x"></i>
                        <h5>Prendre des frais</h5>
                    </a>
                </div>
            </div>


            <div class="col-md-4">
                <div class="main-box mb-red">
                    <a href="report.php">
                        <i class="fa fa-file-text fa-5x"></i>
                        <h5>Signaler</h5>
                    </a>
                </div>
            </div>


        </div>
        <!-- /. ROW  -->


    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<div id="footer-sec">
    Système de paiement des frais de scolarité en ligne | Développé par : <a href="" target="_blank">Le_Code</a>
</div>

<script src="js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="js/custom1.js"></script>



</body>

</html>