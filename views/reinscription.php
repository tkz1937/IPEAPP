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
        <li class="nav-item active">
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

  </div>
</nav>



  <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

    <div class="container">

      <div class="  row mt-10" style="margin-top:15%;">



        <div class="col-md-6 col-xl-4 mb-1 offset-0 " >

          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i> Identité de l'élève</h3>
                <hr class="hr-light">
              </div>
              <!--Body-->

              <form class="formulaire" action="../controllers/add_old_eleve.php" method="post">

                        <div class="md-form">
                          <i class="fa fa-user prefix white-text active"></i>
                          <input type="text" id="matricule" name="matricule" class="white-text form-control">
                          <label for="matricule" class="active">Matricule</label>
                        </div>
                        
                    <div class="md-form">
                      <i class="fa fa-user prefix white-text active"></i>
                      <select name="classe" id="classe">
                        <?php 
                          include_once('../controllers/chargerClasse.php');
                        ?>
                      </select>
                      <label for="cl" > Classe</label>
                    </div>
                        <!-- <div class="md-form">
                          <i class="fa fa-lock prefix white-text active"></i>
                          <input type="text" id="montant" name="montant" class="white-text form-control">
                          <label for="montant">Montant</label>
                        </div> -->
                        <div class="text-center mt-4 offset-1">
                          <button class="btn btn-indigo">Valider</button> <span> </span>


                        </div>

            </form>

                    </div>
                  </div>

                </div>


                <!--Liste récentes-->

                <div >
                    <div class="card offset-1" style="color:white;  margin-top:10%; margin-bottom:45%;">
                      <div class="card-body">
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fa fa-user white-text"></i> Récentes réinscription</h3>
                          <hr class="hr-light">
                        </div>

                          <div class="table-wrapper-2">

                              <!--Table-->
                              <table class="table table-striped table-responsive w-auto">
                                  <thead class="mdb-color lighten-4">
                                  <tr>
                                          <th>N°</th>
                                          <th class="th-lg">Matricule</th>
                                          <th class="th-lg">Nom</th>
                                          <th class="th-lg">Classe</th>
                                        

                                      </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  include_once('../models/dao/inscription.dao.php');
                                  $inscriptDAO=new InscriptionDAO();
                                  $donnee=$inscriptDAO->reinscriptionRecente();
                                  $i=1;
                                  while($res=$donnee->fetch()){
                                   echo"<tr>
                                    <th scope='row'>".$i."</th>
                                    <td>".$res['matricule']."</td>
                                    <td>".$res['nom']."  ".$res['prenom'] ."</td>
                                    <td>".$res['classe']."</td>
                                    </tr>";
                                    $i++;
                                  }?>
                                  </tbody>
                              </table>
                              <!--Table-->

                          </div>

                      </div>
                  </div>

                </div >
      </div >

      <footer class="page-footer fixed-bottom font-small indigo pt-0">
      <div class="footer-copyright py-3 text-center">
             © 2018 Copyright:
             <a href="#">IPEAPP</a>
         </div>
         <!--/Copyright-->

      </footer>

    </div>

  </div>



</body>
<script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="static/js/materialize.min.js"></script>
<script type="text/javascript" src="static/js/plugins.min.js"></script>


</html>
