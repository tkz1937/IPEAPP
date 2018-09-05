<?php
    require_once('../models/structure/classe.class.php');
    require_once('../models/dao/classe.dao.php');
    require_once('../models/structure/inscription.class.php');
    require_once('../models/dao/inscription.dao.php');
    require_once('../models/dao/paiement.dao.php');
    require_once('../models/structure/paiement.class.php');
    require_once('../models/structure/connexiondb.class.php');

    if(isset($_POST['nom_classe']))
    {
        $cl = $_POST['nom_classe'];
        $data1 = new InscriptionDAO();
        $Ins = $data1->getIdInscription($cl);

        $id_inscription = $Ins->getId();
        $data2 = new PaiementDAO();
        $mn = $data2 ->EleveNonEnOrdre($id_inscription);

        ?>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="../views/static/css/walker.min.css">
          <link rel="stylesheet" href="../views/static/css/walker_boot.min.css">
            <link rel="stylesheet" href="../views/static/css/style.min.css">
           <script src="../views/static/js/mdb.min.js" charset="utf-8"></script>
           <script src="../views/static/js/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script src="../views/static/js/bootstrap.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="../views/static/css/style_principal.css">

        </head>
        <body>

        <header>
<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
          <div class="container">
            <a class="navbar-brand" href="#">
              <strong>IPEAPP</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#liste" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="liste">

            <!-- Links -->
            <ul class="navbar-nav mr-auto my-1 my-lg-0 ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="paiement.php">Paiement</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="listes_paiement.php">listes des paiments</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="etat_paiement.php">Etat de paiement</a>
                </li>



            </ul>
          </div>

          </div>
        </nav>
        </header>


        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

        <div class="container col-md-12 col-xl-11 mb-4">

          <div class="row  mt-12" style="margin-top:5%; margin-bottom:20%;">
            <div class="md-form offset-3 col-lg-6">
            <table class="table">
                <thead class="mdb-color lighten-4">
                    <tr>
                            <th class="th-lg">Matricule</th>
                            <th class="th-lg">Nom</th>
                    </tr>
                </thead>
                <tbody><?php
                while ($d = $mn->fetch()) {?>
                    <tr style="color: white;">
                        <td> <?php echo $d['matricule'];?> </td>
                        <td> <?php echo $d['nom'];?></td>
                    </tr><?php
                }
        ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

        <footer class="page-footer fixed-bottom font-small indigo pt-0">
            <div class="footer-copyright py-3 text-center">
             © 2018 Copyright:
             <a href="#"> IPEAPP </a>
            </div>
     <!--/Copyright-->

        </footer><?php

        //header("location: ../views/afficheNonOrdre.php");
        
   
    } else 
    {
        echo "Erreur dans les donnees";
    }
    