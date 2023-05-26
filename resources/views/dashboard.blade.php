@extends('def.def', ['titre'=>'Tableau de bord'])

@section('content')
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="active ">
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
      <a href="{{('/galerie')}}">
        <i class="nc-icon nc-album-2"></i>
        <p>Galeries</p>
      </a>
    </li>
    <li>
      <a href="/souscription">
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
    <li>
      <a href="{{('/')}}">
        <i class="nc-icon nc-pin-3"></i>
        <p>A Propos</p>
      </a>
    </li>
    <li>
      <a href="{{('/profile')}}">
        <i class="nc-icon nc-single-02"></i>
        <p>Profil Utilisateur</p>
      </a>
    </li>
  </ul>
</div>
@endsection

@section('contenta')

<div class="col-md-12">
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body"></div>
  </div>
</div>

@endsection