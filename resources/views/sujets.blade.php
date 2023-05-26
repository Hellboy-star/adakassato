@extends('def.def')

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
      <a href="{{('/galerie')}}">
        <i class="nc-icon nc-album-2"></i>
        <p>Galeries</p>
      </a>
    </li>
    <li class="active ">
      <a href="{{('/sujet')}}">
        <i class="nc-icon nc-tile-56"></i>
        <p>BLOG</p>
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

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="list-group">
                    @foreach ($empsa as $sujets)
                    <a href="{{route('sujet.show', $sujets)}}">
                        <div class="list-group-item">
                            <h4>  {{ $sujets->theme }}  </h4>
                            <p>{{ $sujets->texte }}</p>
                            </a>
                            <div class="d-flex justify-content-between">
                                <small style="text-decoration: black;"> Posté le {{ $sujets->created_at->format('d/m/Y à H:m') }} </small>
                                <span class="badge badge-primary"> {{ $sujets->auteur }} </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-3"></div>
            </div>
        </div>
        <div class="col-md-4">
            <form action="{{route('sujet.store')}}" method="post">
            @csrf
                <div class="row">
                  <div class="col-md-12  mb-3">
                      <label class="form-label" for="exampleInputPassword1">Nom:</label>
                      <input type="text"
                          class="sauteur form-control form-control-sm"
                          name="auteur" id="auteur" placeholder="" />
                  </div>
                  <div class="col-md-12 mb-3">
                        <label class="form-label" for="exampleInputPassword1">Thème du sujet:</label><br>
                        <input type="text" id="theme" name="theme" class="stheme form-control form-control-sm" placeholder=""/>
                  </div>
                  <div class="col-md-12 mb-3">
                      <label class="form-label" for="exampleInputPassword1">Sujet de discussion:</label><br>
                      <input type="text" id="texte" name="texte" class="stexte form-control form-control-sm" placeholder="" required/>
                  </div>
                  <div class="modal-footer">
                          <input type="reset" class="btn btn-danger">
                          <button type="submit" id="add" name="add" class="btn btn-primary">Enregistrer</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection