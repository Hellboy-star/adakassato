@extends('def.def', ['titre'=>'Prédications'])

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
    <li>
      <a href="/souscription">
        <i class="nc-icon nc-money-coins"></i>
        <p>Souscription</p>
      </a>
    </li>
    <li class="active ">
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
<div class="col-md-12 container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
            <h3>Formulaire d'Enrégistrement des Prédications </h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('predication.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12  mb-3">
                      <label class="form-label" for="exampleInputPassword1">Thème de la prédication:</label>
                      <input type="text"
                          class="snom form-control form-control @error('content') is-invallid @enderror" 
                          name="name" id="name" placeholder="" />
                  </div>
                  <div class="col-md-12  mb-3">
                      <label class="form-label" for="exampleInputPassword1">Description:</label>
                      <input type="text"
                          class="sdate form-control form-control @error('content') is-invallid @enderror"  
                          name="description" id="description" placeholder="" />
                  </div>
                  <div class="col-md-12 mb-3">
                      <label class="form-label" for="exampleInputPassword1">Fichier audio /vidéo:</label>
                      <input type="file" id="file" name="file" class="sfile form-control form-control @error('content') is-invallid @enderror" />
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Formulaire d'Enrégistrement des Evènements </h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('evenement.store')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12  mb-3">
                          <label class="form-label" for="exampleInputPassword1">Nom de la fête:</label>
                          <input type="text"
                              class="snom form-control form-control @error('content') is-invallid @enderror" 
                              name="NOM" id="NOM" placeholder="" />
                      </div>
                      <!-- <div class="col-md-12  mb-3">
                          <label class="form-label" for="exampleInputPassword1">Description de la fête:</label>
                          <input type="text"
                              class="sdate form-control form-control @error('content') is-invallid @enderror"  
                              name="description" id="description" placeholder="" />
                      </div> -->
                      <div class="col-md-12 mb-3">
                            <label class="form-label" for="exampleInputPassword1">Date de la fête:</label><br>
                            <input type="date" id="DATE" name="DATE" class="sdate form-control form-control @error('content') is-invallid @enderror"  placeholder=""/>
                      </div>
                      <div class="col-md-12 mb-3">
                          <label class="form-label" for="exampleInputPassword1">Lieu de la fête:</label><br>
                          <input type="text" id="LIEU" name="LIEU" class="slieu form-control form-control @error('content') is-invallid @enderror"  placeholder=""/>
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Formulaire d'Enrégistrement de Galerie </h3>
            </div>
            <div class="card-body" id="dropzone">
                <form method="POST" action="{{route('galerie.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12  mb-3">
                          <label class="form-label" for="exampleInputPassword1">Thème de la fête:</label>
                          <input type="text"
                              class="snom form-control form-control @error('content') is-invallid @enderror" 
                              name="name" id="name" placeholder="" />
                      </div>
                      <div class="col-md-12  mb-3">
                          <label class="form-label" for="exampleInputPassword1">Description de la fête:</label>
                          <input type="text"
                              class="sdate form-control form-control @error('content') is-invallid @enderror"  
                              name="description" id="description" placeholder="" />
                      </div>
                      <div class="dz-message needsclick">
                        Drop zone 
                        <span>Possibilité d'ajouter plusieurs fichier</span>
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
  </div>
</div>
@endsection