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
    <li class="active ">
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
    <div class="col-md-12">
      <div class="container">
        <div class="list-group">
          @if($empsa->count() > 0) {
            @foreach ($empsa as $galerie)
              <a href="{{route('galerie.show', $galerie)}}">
                <div class="list-group-item card-body">
                  <h4>{{ $galerie->theme }}</h4>
                  <img src="{{$galerie->princi}}" />
                  <p>{{ $galerie->details }}</p>
                </div>
              </a>
            @endforeach
          }
          @endif
         
        </div>
      </div>
    </div>

    <div class="col-md-4"></div>
  </div>
</div>
@endsection

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="list-group">
                        @foreach ($empsa as $galerie)
                        <a href="{{route('galerie.show', $galerie)}}">
                            <div class="list-group-item card-body">
                                <h4></h4>
                                <div class="card-body">
                                    <img />
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>