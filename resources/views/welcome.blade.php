<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

  <?php


  header("refresh: 360");
   ?>

</head>

<body>
  <nav class="navbar navbar-ct-transparent" role="navigation-demo" id="demo-navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="{{('/')}}">
          <div class="logo-container">
            <div class="logo">
              <img src="assets/paper_img/03.webp" alt="Assemblée de Dieu Logo">
            </div>
            <div class="brand">
              Temple La Bénédiction
            </div>
          </div>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navigation-example-2">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{('/')}}">
              Acceuil
            </a>
          </li>
          <li>
            <a href="{{('/sujet')}}">
              Blog
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
            <a href="https://sandbox-me.fedapay.com/CuOUfHcE">
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
      </div>
    </div>
  </nav>


  <div class="wrapper">
    <div class="demo-header demo-header-image">
      <div class="motto">
        <h1 class="title-uppercase">église évangélique des assemblées de Dieu du Bénin</h1>
        <h3 class="title-uppercase">Temple La Bénédiction d'Akassato</h3>
      </div>
    </div>

    <div class="main">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <div id="carousel">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="assets/paper_img/02.png" alt="Awesome Image">
                    </div>
                    <div class="item">
                      <img src="assets/paper_img/03.webp" alt="Awesome Image">
                    </div>
                    <div class="item">
                      <img src="assets/paper_img/09.jpg" alt="Awesome Image">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <div class="panel panel-inverse">
                <div class="panel-heading" style="background-color: black;">
                <h4 class="title-uppercase">programme Hebdomaire de l'église</h4>
                </div>
              <div class="panel-body">
                <div class="row">
                  <p>
                    <h6 style="font-style: italic;">Dimanche</h6>
                  <b>Prière pour les ouvriers:</b> 07H à 07H30<br>
                  <b>EDL:</b> 07H30 à 08H00<br>
                  <b>Culte:</b> 08H00 à 10H00<br>
                  </p>
                  <p>
                    <h6 style="font-style: italic;">Mardi</h6>
                  <b>Prière matinale:</b> 05H30 à 06H30<br>
                  <b>Etude biblique:</b> 19H30 à 21H00<br>
                  </p>
                  <p>
                    <h6 style="font-style: italic;">Jeudi</h6>
                  <b>Prière pour les foyers:</b> 09H00 à 11H00<br>
                  <b>Prière et témoignage:</b> 19H30 à 21H00<br>
                  </p>
                  <p>
                    <h6 style="font-style: italic;">Vendredi</h6>
                  <b>Prière matinale: </b>
                  <b>Prière pour les foyers en quête d'enfant:</b> 05H30 à 06H30 <br>
                  <b>Prière pour les femmes en état de grossesse:</b> 11H00 à 12H00 <br>
                  <b>Cellule de prière:</b> 12H00 à 13H00 <br>
                  <b>Veillée tous les derniers vendredi du mois:</b> 00H00 à 04H00 <br>
                  </p>
                  <p>
                    <h6 style="font-style: italic;">Samedi</h6>
                  <b>Répitition groupe musical:</b> 16H00 à 17H30 <br>
                  <b>Classe préparatoire EDL:</b> 17H30 à 19H00 <br>
                  <b>Répitition chorale:</b> 19H00 à 20H30 <br>
                  </p>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card-body" style="height: 50%; text-align:center">
              <div class="panel panel-inverse">
                <div class="panel-heading" style="background-color: black;">
                <h4 class="title-uppercase">Prédications</h4>
                </div>
              <div class="panel-body">
                <div class="row">
                  <div class="card-body">
                    <table border="2px">
                      <thead>
                          <tr>
                              <th style="width: 10%;">N°</th>
                              <th style="width: 40%;">Nom</th>
                              <th style="width: 50%;">Description</th>
                              <th style="width: 50%;">Fichier</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($a as $id)
                          <tr>
                              <td> {{$id->id }} </td>
                              <td> {{$id->name }} </td>
                              <td> {{$id->description }} </td>
                              <td> {{$id->file }} </td>
                              <td> 
                                <a href="{{route('predication.show', $id)}}"> Visualiser </a> <br>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <div class="panel panel-inverse">
                <div class="panel-heading" style="background-color: black;">
                <h4 class="title-uppercase">Evènements à venir</h4>
                </div>
              <div class="panel-body">
                <div class="row">
                  <div>
                  <div class="col-md-12">
                    <table border="2px">
                      <thead>
                          <tr>
                              <th style="width: 20%;">N°</th>
                              <th style="width: 100%;">Nom</th>
                              <th style="width: 100%;">Description</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($b as $id)
                          <tr>
                              <td> {{$id->id }} </td>
                              <td> {{$id->NOM }} </td>
                              <td> {{$id->DATE }} </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <kkiapay-widget sandbox="true" amount="1" key="6726ce0a54cc052cc6eba4265b5475c506df5ae8" callback="https://kkiapay-redirect.com" /> -->
      <!-- <kkiapay-widget amount="<montant-a-preleve-chez-le-client>" 
        key="<votre-api-key>"
        url="<url-vers-votre-logo>"
        position="center"
        sandbox="true"
        data=""
        callback="<url-de-redirection-quand-lepaiement-est-reuissi>">
      </kkiapay-widget> -->
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
                <a href="{{('/sujet')}}">
                  Blog
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
                <a href="https://sandbox-me.fedapay.com/CuOUfHcE">
                  Souscriptions
                </a>
              </li>
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
    </div>
  </div>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/js/ct-paper-checkbox.js"></script>
<script src="assets/js/ct-paper-radio.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/ct-paper.js"></script>
<script>
  openKkiapayWidget({amount:"1",position:"right",callback:"",
    data:"",
    theme:"green",
    key:"<votre-api-key>"})

    addSuccessListener(response => {
        console.log(response);
    });
</script>
</html>