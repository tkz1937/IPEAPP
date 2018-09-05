<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LISTES DES PAIEMENTS</title>
    <link rel="stylesheet" href="static/css/walker.min.css">
  <!--  <link rel="stylesheet" href="static/css/materialize.min.css">-->
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

        <ul class="navbar-nav mr-auto my-1 my-lg-0 ml-auto">
       
        <li class="nav-item ">
            <a class="nav-link " href="paiement.php">Paiement</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="listes_paiement.php">Listes des paiements</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="etat_paiement.php">Etat de paye</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="listes_en_ordre.php">Liste des élèves en ordre</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="listes_non_ordre.php">Liste des élèves non en ordre</a>
        </li>

         <li class="nav-item " style="margin-left:0%;">
            <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>


        </ul>
      </div>

      </div>
    </nav>




      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

        <div class="container" >

          <div class="  row mt-12 " style="margin-bottom:35%;">
            <div class="md-form offset-3 col-lg-6">

                <form action="../controllers/get_id_class.php" method="post">
            <div class="row mt-12" style="margin:10%;">
                <div class="input-field col white-text s11" >
                  <select  class="colorful-select dropdown-primary"  name="classe"  id="classe " style="color:white;ss"  >
                    <option value="" disabled selected>Sélectionner la classe</option>
                    <?php 
                          include_once('../controllers/chargerClasse.php');
                      ?>
                  </select>


                </div>
                <button class="btn btn-indigo">Valider</button> <span> </span>
                
            </div>
            </form>

            </div>
            <div class="card offset-2" style="color:white;">
              <div class="card-body">
                <div class="text-center">
                  <h3 class="white-text">
                    <i class="fa fa-user white-text"></i> Listes des elves</h3>
                  <hr class="hr-light">
                </div>

          <div class="table-wrapper-2">

              <!--Table-->
              <table class="table table-striped table-responsive w-auto">
                  <thead class="mdb-color lighten-4">
                                 <th>N°</th>
                                <th class="th-lg">Matricule</th>
                                <th class="th-lg">Nom </th>
                                <th class="th-lg">PostNom</th>
                                <th class="th-lg">Prenom</th>
                                </tr>
                  </thead>
                  <tbody>
                                
                                
                  <?php 
                        include_once('../models/structure/connexiondb.class.php');
                          include_once('../models/dao/display.dao.php');
                          include_once('../models/dao/anneescolaire.dao.php');
                          $anneescolaireDao=new AnneeScolaireDAO();
                          $id_annee_scolaire = $anneescolaireDao->getIdByAnneeScolaire();
                          $displayDAO=new DisplayDAO();
                          if(isset($_GET['id'])){
                              $i=1;
                            $res=$displayDAO->afficherEleveParClasse($_GET['id'],$id_annee_scolaire);
                            while($data=$res->fetch()){
                                echo' <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$data['matricule'].'</td>
                                <td>'.$data['nom'].'</td>
                                <td>'.$data['postnom'].'</td>
                                <td>'.$data['prenom'].'</td> </tr>';
                                $i++;
                            }
                        }

                      ?>

                  </tbody>
              </table>
              <!--Table-->

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


  </body>
  <script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="static/js/materialize.min.js"></script>
  <script type="text/javascript" src="static/js/plugins.min.js"></script>
</html>
