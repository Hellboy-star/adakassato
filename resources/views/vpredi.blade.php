@extends('def.def', ['titre'=>'Visualisation des Prédications'])

@section('content')
<div class="sidebar-wrapper">
  <ul class="nav">
  <li>
      <a href="{{('/dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Tableau de bord</p>
      </a>
    </li>
    <li class="active ">
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
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                      @foreach ($id as $ids)
                      <div class="col-md-12" style="text-align: center;">
                        {{$ids->name}}
                      </div>
                      <div class="col-md-12" style="text-align: center;">
                        <video width="300" height="200" controls autoplay>
                           <source src="{{asset('assets')}}/{{$ids->file}}" type=video/mp4>
                        </video>
                      </div>
                        
                        
                      @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('comment.store')}}" method="post">
                                    @csrf
                                    <div>
                                      <label>Nom d'utilisateur:</label>
                                      <input name="name" id="name" class="form-control @error('content') is-invallid @enderror "/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ajouter un commentaire:</label>
                                        <textarea name="commentaire" id="commentaire" class="form-control @error('content') is-invallid @enderror " ></textarea>
                                        @error('content')
                                            <div class="invalid-feedback"> {{$error->first('content')}} </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Soumettre mon commentaire </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection