<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="static/css/walker.min.css">
<link rel="stylesheet" href="static/css/walker_boot.min.css">
 <script src="static/js/mdb.min.js" charset="utf-8"></script>
  <script src="static/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="static/js/bootstrap.min.js" charset="utf-8"></script>
  <link href="static/js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 
<!--<link rel="stylesheet" href="css/materialize.min.css">-->
  <link rel="stylesheet" href="static/css/style_principal.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body >


<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <strong>IPEAPP</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#liste" aria-controls="navbarSupportedContent-7"  aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item active">
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
            <a class="nav-link " href="déconnexion.php">Déconnexion</a>
        </li>



    </ul>
  </div>

  </div>
</nav >
 <!--class="mask rgba-gradient d-flex justify-content-center align-items-center "

<div class="view" style="background-image: url('file:///C:/Users/Fran%C3%A7ois%20Walker/Desktop/Enregistrer/images/gallary/18.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">-->

<div class="mask rgba-gradient d-flex justify-content-center align-items-center ">

    <div class="container" style=""  >




      <div class="  row mt-10" style="margin-top:10%; margin-bottom:30%;">

        <div class="col-md-12 col-xl-12 mb-4 " >

          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i> Inscrire nouveau Eleve

                </h3>

                <hr class="hr-light">
              </div>
              <!--Body-->

            <div class="section scrollspy">



              <form  action="../controllers/add_newEleve.php" method="post" enctype="multipart/form-data">


                      <div class="row">

                        <div class="col-md-8">

                          <div class="row">



                          <div class="col-md-6 ">
                            <div class="md-form">
                              <i class="fa fa-user prefix white-text active"></i>
                              <input type="text" id="nom" name="nom" class="white-text form-control">
                              <label for="nom" > Nom</label>
                            </div>
                            <div class="md-form">
                              <i class="fa fa-user prefix white-text active"></i>
                              <input type="text" id="postnom" name="postnom" class="white-text form-control">
                              <label for="postnom" > Postnom</label>
                            </div>
                            <div class="md-form">
                              <i class="fa fa-user prefix white-text active"></i>
                              <input type="text" id="prenom" name="prenom" class="white-text form-control">
                              <label for="prenom" > Prénom</label>
                            </div>
                            <div class="md-form">
                              <i class="fa fa-user prefix white-text active"></i>
                              <input type="date" id="date_naissance" name="date_naissance" class=" white-text form-control  colorful-select dropdown-primary ">
                              <label for="date_naissancenom" class="active" > Date de naissance</label>
                            </div>

                            <div class="md-form">
                              <i class="fa fa-user prefix white-text active"></i>
                              <input type="text" id="lieu_naissance" name="lieu_naissance" class="white-text form-control">
                              <label for="lieu_naissance" > Lieu de naissance</label>
                            </div>

                  </div>
                  <div class="col-md-6 ">


                    <div class="md-form">
                      <i class="fa fa-user prefix white-text active"></i>
                      <input type="text" id="nationalite" name="nationalite" class="white-text form-control">
                      <label for="nationalite" > Nationalité</label>
                    </div>
                    <div class="md-form offset-2">

                      <label for="lieu_naissance" class="active" style="margin-left:-15px;">Genre</label>
                    </div>
                    <div class="row" style="color:white;">
                    <div class="form-check offset-3">
                          <input class=" genre blue form-check-input" name="genre" type="radio" id="homme" checked="checked">
                          <label class="form-check-label  white-text" for="homme">H</label>
                    </div>

                    <div class="form-check">
                          <input class=" genre blue form-check-input" name="genre" type="radio" id="femme">
                          <label class="form-check-label white-text" for="femme">F</label>
                    </div>
                  </div>


                    <div class="md-form">
                      <i class="fa fa-user prefix white-text active"></i>
                      <input type="text" id="adresse" name="adresse" class="white-text form-control">
                      <label for="lieu_naissance" >Adresse</label>
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

                  
                  
                  

                  </div>
                  </div>

                  <div class="col-md-12"> 
                          
                      <div id="file-upload" class="section col-md-12">
                          <div class="col s12 m12 l9">
                              <input type="file" id="input-file-now-custom-2 " name="piece"  class="dropify-fr"  data-height="100"  />
                        </div>
                      </div>
                </div>
                  </div>
                
                  <div class="col-md-4 ">
                        <div class="md-form">
                          <i class="fa fa-user prefix white-text active"></i>
                          <input type="text" name="responsable" id="responsable" class="white-text form-control">
                          <label for="responsable" >Nom complet du responsable</label>
                        </div>
                        <div class="md-form">
                          <i class="fa fa-envelope prefix white-text active"></i>
                          <input type="text" id="tele_responsable" name="tele_responsable" class="white-text form-control">
                          <label for="tele_responsable" >Téléphone</label>
                        </div>
                        <div class="md-form">
                          <i class="fa fa-lock prefix white-text active"></i>
                          <input type="text" id="adresse_responsable" name="adresse_responsable" class="white-text form-control">
                          <label for="adresse_responsable">Adresse</label>
                        </div>
                        <div class="text-center mt-4 offset-1">
                          <button type="submit" class=" btn btn-indigo">Inscrire</button><span id="reponse"></span>


                        </div>





                    </div>
                    <hr >

                  </div>

            </form>
          </div>

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

<script type="text/javascript">
  $(document).ready(function(){
      // Basic
      $('.dropify').dropify();

      // Translated
      $('.dropify-fr').dropify({
          messages: {
              default: 'Glissez-déposez la pièce jointe',
              replace: 'Glissez-déposez la pièce jointe ou cliquez pour remplacer',
              remove:  'Supprimer',
              error:   'Désolé, le fichier trop volumineux'
          }
      });

      // Used events
      var drEvent = $('.dropify-event').dropify();

      drEvent.on('dropify.beforeClear', function(event, element){
          return confirm("Do you really want to delete \"" + element.filename + "\" ?");
      });

      drEvent.on('dropify.afterClear', function(event, element){
          alert('File deleted');
      });
  });
</script>



</body>





      <script src="script_nouvel_eleve.js"></script>
      <script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="static/js/materialize.min.js"></script>
      <script type="text/javascript" src="static/js/plugins.min.js"></script>

      <script src="static/js/plugins/nouislider.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="static/js/plugins/angular.min.js"></script>
    
      <script type="text/javascript" src="static/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <script type="text/javascript" src="static/js/plugins/dropify/js/dropify.min.js"></script>
    



</html>
