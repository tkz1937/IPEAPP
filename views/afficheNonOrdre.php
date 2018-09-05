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

        <?php include_once('../controllers/afficherNonOrdre.php');?>

        <footer class="page-footer fixed-bottom font-small indigo pt-0">
            <div class="footer-copyright py-3 text-center">
             © 2018 Copyright:
             <a href="#"> IPEAPP </a>
            </div>
     <!--/Copyright-->

        </footer>





<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
</script>


  </body>
  <script type="text/javascript" src="static/js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="static/js/materialize.min.js"></script>
  <script type="text/javascript" src="static/js/plugins.min.js"></script>
</html>

