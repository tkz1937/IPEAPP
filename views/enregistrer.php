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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>


  <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

    <div class="container">

      <div class="row mt-8" style="margin-top:7%; margin-bottom:5%;">



        <div class="col-md-6 col-xl-7 mb-2 offset-3" >

          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="text-center">
                <h3 class="white-text">
                  <i class="fa fa-user white-text"></i>Créer un compte:</h3>
                <hr class="hr-light">
              </div>
              <!--Body-->
              <form  action="../controllers/add_user.php" method="post">


                  <div class="md-form">
                    <i class="fa fa-lock prefix white-text active"></i>
                    <input type="text" id="login" name="login" class="white-text form-control" required>
                    <label for="login">Login</label>
                  </div>
                    <div class="md-form">
                      <i class="fa fa-user prefix white-text active"></i>
                      <input type="text" id="nom" name="nom" class="white-text form-control" required>
                      <label for="nom" > Nom complet</label>
                    </div>
                  
                    <div class="md-form">
                      <i class="fa fa-envelope prefix white-text active"></i>
                      <input type="email" id="email" name="email" class="white-text form-control" required>
                      <label for="email" >Votre email</label>
                    </div>
                    <div class="md-form">
                      <i class="fa fa-lock prefix white-text active"></i>
                      <input type="password" id="pwd" name="pwd" class="white-text form-control" required>
                      <label for="pwd">Nouveau mot de passe</label>
                    </div>
                    <div class="md-form">
                      <i class="fa fa-lock prefix white-text active"></i>
                      <input type="password" id="pwdconfig" name="pwdconfig" class="white-text form-control" required>
                      <label for="pwdconfig">Confirmer votre mot de passe</label>
                    </div>

                    <div class="md-form">
                      <i class="fa fa-lock prefix white-text active"></i>
                      <input type="text" id="num" name="telephone" class="white-text form-control" required>
                      <label for="num">Numéro téléphonique</label>
                    </div>
                    <div class="md-form">
                      <i class="fa fa-lock prefix white-text active"></i>
                      <input type="number" id="niv" name="niveau" min="0" max="6" class="white-text form-control" required>
                      <label for="niv">Niveau</label>
                    </div>

                    <div class="text-center mt-4">
                      <button class="btn btn-indigo">Créer</button> <span> </span>
                      <hr class="hr-light mb-3 mt-4">
                      <div class="inline-ul text-center d-flex justify-content-center">
                        <a class="p-2 m-2 tw-ic">
                          <i class="fa fa-twitter white-text"></i>
                          <a href="index.php" style="color:white;">Avez-vous déjà un compte ?</a>
                        </a>

                      </div>
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
