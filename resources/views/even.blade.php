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
    <li class="active ">
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
<div class="col-md-12">

<div class="card">
    <div class="card-header">
        <h4>Ensemble des Evènements</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="text-primary">
                    <th>N°</th>
                    <th>Evènements</th>
                    <th>Date</th>
                    <th>Lieu</th>
                </thead>
                <tbody>
                @foreach($empsa as $id)
                    <tr>
                        <td> {{$id->id }} </td>
                        <td> {{$id->NOM }} </td>
                        <td> {{$id->DATE }} </td>
                        <td> {{$id->LIEU }} </td>
                        <!-- <td> 
                            <a href="{{url('/view', $id->id)}}"> Visualiser </a> <br>
                        </td>
                        <td> 
                            <a href="{{url('/download', $id->file)}}"> Télécharger </a> 
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection