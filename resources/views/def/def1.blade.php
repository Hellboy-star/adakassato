<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/paper_img/03.webp">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Temple La Bénédiction d'Akassato</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/ct-paper.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
  <?php
  header("refresh: 360");
   ?>

</head>
<body>
    
<nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{('/')}}">Temple La Bénédiction d'Akassato</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
        </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>  

<main>
  @yield('contenta')
</main>

<footer class="footer-demo section-dark">
        <div class="container">
          <nav class="pull-left">
            <ul>

              <li>
                <a href="{{('/')}}">
                  Acceuil
                </a>
              </li>
              <li>
                <a href="{{('/evenement')}}">
                  Evènements
                </a>
              </li>
              <li>
                <a href="{{('/predication')}}">
                  Prédications
                </a>
              </li>
              <li>
                <a href="{{('/souscription')}}">
                  Souscriptions
                </a>
              </li>
              <!-- <li>
                <a href="{{('/contact')}}">
                  Contact
                </a>
              </li> -->
              <li>
                <a href="{{('/apropos')}}">
                  A Propos
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright pull-right">
            &copy; 2023, <i class="fas fa-cross cross"></i> Temple la Bénédiction d'Akassato
          </div>
        </div>
      </footer>

      <script src="https://cdn.kkiapay.me/k.js"></script>

</body>

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>


<script src="assets/js/ct-paper-checkbox.js"></script>
<script src="assets/js/ct-paper-radio.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>

<script src="assets/js/ct-paper.js"></script>

</html>