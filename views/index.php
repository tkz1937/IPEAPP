<!DOCTYPE html>
<html>
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


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>IPEAPP</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline">
          <div class="md-form mt-0">


            <a href="Enregistrer.php" class="nav-link " style="color:white;"><b>Créer un compte</b></a>
          </div>
        </form>
      </div>
    </div>
  </nav>



    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">

      <div class="container" >

        <div class="row mt-5" style="margin-bottom:10%; " >


          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s"  style="margin-top:18%;">IPEAPP </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
            dolor molestiae, quisquam iste, maiores. Nulla.</h6>
            <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
          </div>


          <div class="col-md-6 col-xl-5 mb-4" >

            <div class="card wow fadeInRight" data-wow-delay="0.3s"  style="margin-top:15%;">
              <div class="card-body">

                <div class="text-center">
                  <h3 class="white-text">
                    <i class="fa fa-user white-text"></i> Authentification:</h3>
                  <hr class="hr-light">
                </div>
                <!--Body-->

                <form class="formulaire" action="../controllers/nouvelle_connexion.php" method="post">


                      <div class="md-form">
                        <i class="fa fa-user prefix white-text active"></i>
                        <input type="text" name="login" id="form3" class="white-text form-control" required>
                        <label for="form3" >Votre login</label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input type="email" name="email" id="form2" class="white-text form-control" required>
                        <label for="form2">Votre email</label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" name="pwd" id="form4" class="white-text form-control" required>
                        <label for="form4">Votre mot de passe</label>
                      </div>
                      <div class="text-center mt-4">
                        <button class="btn btn-indigo">Connecter</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                  
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







  </body>

  <script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="static/js/materialize.min.js"></script>
  <script type="text/javascript" src="static/js/plugins.min.js"></script>
</html>
