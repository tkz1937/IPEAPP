<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="static/css/walker.min.css">
  <link rel="stylesheet" href="static/css/walker_boot.min.css">
    <link rel="stylesheet" href="static/css/style.min.css">
   <script src="static//js/mdb.min.js" charset="utf-8"></script>
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav mr-auto my-1 my-lg-0 ml-auto">
    <li class="nav-item active">
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

        <li class="nav-item ">
            <a class="nav-link " href="configuration.php">Configuration</a>
        </li>

         <li class="nav-item " style="margin-left:0%;">
            <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>




    </ul>

  </div>
</nav>


  <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

    <div class="container">

      <div class="row mt-8" style="margin-top:20%; margin-bottom:20%;">



        <div class="col-md-6 col-xl-7 mb-1 offset-3" >

          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i> Ajouter une classe</h3>
                <hr class="hr-light">
              </div>
              <!--Body-->

              <form class="formulaire" action="../controllers/add_classe.php" method="post">
                  <div class="md-form">
                    <i class="fa fa-user prefix white-text active"></i>
                    <input type="text" id="intitule" name="intitule" class="white-text form-control">
                    <label for="intitule" >Intitulé</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix white-text active"></i>
                    <input type="text" id="niveau" name="niveau" class="white-text form-control">
                    <label for="niveau" >Niveau</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix white-text active"></i>
                    <input type="number" min="0" id="nbre_place" name="nbre_place" class="white-text form-control">
                    <label for="nbre_place" >Nombre de place</label>
                  </div>


                  <div class="text-center mt-4">
                    <button class="btn btn-indigo">Ajouter</button> <span> </span>


                  </div>

              </form>
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

      </footer>

    </div>

  </div>



</header>
<script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="static/js/materialize.min.js"></script>
<script type="text/javascript" src="static/js/plugins.min.js"></script>
</html>
