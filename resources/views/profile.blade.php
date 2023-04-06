@extends('def.def', ['titre'=>'Evènements'])

@section('content')
<div class="sidebar-wrapper">
  <ul class="nav">
    <li>
      <a href="{{('/dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Tableau de bord</p>
      </a>
    </li>
    <li>
      <a href="{{('/predication')}}">
        <i class="nc-icon nc-note-03"></i>
        <p>Prédication</p>
      </a>
    </li>
    <li>
      <a href="{{('/evenement')}}">
        <i class="nc-icon nc-calendar-60"></i>
        <p>Evènements</p>
      </a>
    </li>
    <li>
      <a href="https://sandbox-me.fedapay.com/CuOUfHcE">
        <i class="nc-icon nc-money-coins"></i>
        <p>Souscription</p>
      </a>
    </li>
    <li>
      <a href="{{('/formulaire')}}">
        <i class="nc-icon nc-single-copy-04"></i>
        <p>Formulaires</p>
      </a>
    </li>
    <!-- <li>
      <a href="{{('/')}}">
        <i class="nc-icon nc-pin-3"></i>
        <p>A Propos</p>
      </a>
    </li> -->
    <li class="active ">
      <a href="{{('/profile')}}">
        <i class="nc-icon nc-single-02"></i>
        <p>Profil Utilisateur</p>
      </a>
    </li>
  </ul>
</div>
@endsection

@section('contenta')

<div class="col-md-4">
  <div class="card card-user">
    <div class="image">
      <img src="../assets/img/damir-bosnjak.jpg" alt="Photo de profil">
    </div>
    <div class="card-body">
      <div class="row">
        <div style="text-align: center;">MATRICULE</div>
        <div>NOM ET PRENOMS</div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">Nom et prénoms du père</div>
            <div class="col-md-6">Nom et prénom de la mère</div>
          </div>
        </div>
        <div>NBRE D'ENFANTS ENFANTS</div>
      </div>
    </div>

    <div class="card-footer">
      <hr>
    </div>
  </div>

  <div class="card"></div>

</div>

<div class="col-md-8"></div>

@endsection