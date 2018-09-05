<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="static/css/walker.min.css">
  <link rel="stylesheet" href="static/css/walker_boot.min.css">
    <link rel="stylesheet" href="static/css/style.min.css">
   <script src="static/js/mdb.min.js" charset="utf-8"></script>
   <script src="static/js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="static/js/bootstrap.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="static/css/style_principal.css">

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
            <a class="nav-link" href="ajouter_classe.php">Ajouter classe
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="inscrire_nouveau_eleve.php">Inscription</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="reinscription.php">Réinscription</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="paiement.php">Paiement</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="listes_paiement.php">Listes des paiements</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="configuration.php">Configuration</a>
        </li>

         <li class="nav-item " style="margin-left:0%;">
            <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>




    </ul>
  </div>

  </div>
</nav>


  <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

    <div class="container">

      <div class="row" style="margin-top:7%;">
        <div class="col-md-6 col-xl-8 mb-1 offset-2">
          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i> CONFIGURATION</h3>

              </div>

              <div class="text-center">
                <h6 class="white-text">
                  <i class="fa fa-user white-text"></i> Année scolaire</h6>
                <hr class="hr-light">
              </div>
              <form class="" action="../controllers/add_anneescolaire.php" method="post">
                    <div class="row">
                      <div class="md-form col-xl-6">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input type="date" id="classe" class="white-text form-control" name="debut">
                        <label for="classe" class="active"  >Début</label>
                      </div>

                        <div class="md-form col-xl-6">
                          <i class="fa fa-envelope prefix white-text active"></i>
                          <input type="date" id="classe" class="white-text form-control" name="fin">
                          <label for="classe" class="active" >Fin</label>
                        </div>
                  </div>
                  <div class="text-center mt-4 offset-1">
                    <?php 
                      $erreurs = array(   "",
                                          "erreur des données",
                                          "Veuillez tout remplir",
                                          "Année Scolaire incorrecte.<br /> la date de début doit être supérieure à celle de fin et l'ecart doit être d'une année!",
                                          "cette année scolaire existe déjà",
                                          "AnneeScolaire enregisté avec succès !"
                                          );
                        extract($_GET);
                        if(isset($error))
                          echo '<label style="color:yellow" for="classe" class="active" >'.$erreurs[$error].'</label>';
                    ?>
                  </div>
                  <div class="text-center mt-4 offset-1">
                    <input class="btn btn-indigo" value="Enregistrer" type="submit">
                  </div>
              </form>

        </div>
      </div>
    </div>
  </div>

      <div class="  row mt-10" style="margin-top:2%; margin-bottom:27%;">





        <div class="col-md-6 col-xl-4 mb-1 offset-2 " >

          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i> AJOUT DES CATEGORIES FRAIS</h3>
                <hr class="hr-light">
              </div>
              <!--Body-->

              <form class="formulaire" action="../controllers/add_categorie.php" method="post">


                          <div class="md-form">
                            <div class="input-field col white-text s8" style="margin:10%; width:290px;">
                            <label for="motif" >description</label>
                              <input type="text" id="frais" name='description' class="white-text form-control">
                            </div>
                        </div>
                        <div class="md-form">
                          <i class="fa fa-user prefix white-text active"></i>
                          <input type="text" id="motif" name='intitule' class="white-text form-control">
                          <label for="motif" >Intitulé</label>
                        </div>

                        <div class="text-center mt-4 offset-1">
                          <button class="btn btn-indigo">Enregistrer les modifications</button> <span> </span>


                        </div>

            </form>

                    </div>
                  </div>

                </div>


                <!--Liste récentes-->

                <div  class="col-md-6 col-xl-4 mb-1 offset-0">
                    <div class="card " style="color:white;">
                      <div class="card-body">
                        <div class="text-center">
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fa fa-user white-text"></i> AUTRES FRAIS</h3>
                          <hr class="hr-light">
                          <form class="formulaire" action="../controllers/add_frais.php" method="post">

                                      <div class="md-form">
                                        <i class="fa fa-envelope prefix white-text active"></i>
                                        <input name="montant" type="number" id="classe" class="white-text form-control">
                                        <label for="classe" >Montant</label>
                                      </div>

                                    <div class="md-form">
                                      <div class="input-field col white-text s8" style="margin:10%; width:290px;">
                                        <select  name="motif" class="colorful-select dropdown-primary white-text" id="classe " >
                                          <option value="" disabled selected>Sélectionner le  motif</option>
                                          <option value="janvier" >Janvier</option>
                                          <option value="fevrier">Février</option>
                                          <option value="mars">Mars</option>
                                          <option value="avril">Avril</option>
                                          <option value="mai">Mai</option>
                                          <option value="juin">Juin</option>
                                          <option value="juillet">Juillet</option>
                                          <option value="septembre">Septembre</option>
                                          <option value="octobre">Octobre</option>
                                          <option value="novembre">Novembre</option>
                                          <option value="necembre">Décembre</option>
                                        </select>
                                        <label for="" style="margin-left:10px;">Motif</label>
                                      </div>
                                    </div>
                                    <div class="md-form">
                                    <div class="input-field col white-text s8" style="margin:10%; width:290px;">
                                        <select  name="classe" class="colorful-select dropdown-primary white-text" id="classe " >
                                        <option value="" disabled selected>Sélectionner la classe </option>
                                        <?php
                                          include_once('../controllers/chargerClasse.php') ?>
                                        </select>
                                        <label for="" style="margin-left:10px;">Classe</label>
                                    </div>
                                    <div class="input-field col white-text s8" style="margin:10%; width:290px;">
                                        <select  name="categorie" class="colorful-select dropdown-primary white-text" id="classe " >
                                        <option value="" disabled selected>Sélectionner la categorie</option>
                                        <?php
                                          include_once('../controllers/chargerCategorie.php') ?>
                                        </select>
                                        <label for="" style="margin-left:10px;">Categorie</label>
                                      </div>
                                      
                                   
                                  <div class="text-center mt-4 offset-1">
                                    <input class="btn btn-indigo" value="Enregistrer" type="submit">
                                  </div>

                        </form>
                  </div>

                </div>
      </div>

      <footer class="page-footer fixed-bottom font-small indigo pt-0">
      <div class="footer-copyright py-3 text-center">
             © 2018 Copyright:
             <a href="#"> IPEAPP </a>
         </div>
         <!--/Copyright-->

      </footer>
    </div>
</div>

</header>
<script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="static/js/materialize.min.js"></script>
<script type="text/javascript" src="static/js/plugins.min.js"></script>

</html>
