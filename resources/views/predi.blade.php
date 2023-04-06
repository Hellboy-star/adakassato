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
<div class="col-md-12">
  
<div class="card">
    <div class="card-header">
        <h4>Ensemble des Prédications</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="text-primary">
                    <th>N°</th>
                    <th>Thème</th>
                    <th>Description</th>
                    <th>Fichier / Regarder</th>
                    <th>Fichier / Télécharger</th>
                </thead>
                <tbody>
                @foreach($emps as $id)
                    <tr>
                        <td> {{$id->id }} </td>
                        <td> {{$id->name }} </td>
                        <td> {{$id->description }} </td>
                        

                        <td> 
                            <a href="{{route('predication.show', $id)}}"> Visualiser </a> <br>
                        </td> 
                        <td> 
                            <a href=""> Télécharger </a> 
                        </td>
                        
                        <!-- <td> 
                            <a href="{{route('predication.show', $id)}}"> Visualiser </a> <br>
                        </td> 
                        <td> 
                            <a href="{{url('predication.download', $id->file)}}"> Télécharger </a> 
                        </td> -->
                        
                        <!-- <td> 
                          <form action="{{('')}}" method="post"></form>
                        </td>
                        <td> 
                          <form action="{{('')}}" method="post"></form>
                        </td> -->

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
<!-- 
<div class="container">
  <div class="modal fade" id="mod">
    <div class="modal-dialog modal-md">
      <div class="container row">
        <div class="  col-md-12 card">
          <div class="card-header">
            <h4>VISUALISATION DES PREDICATIONS</h4>
          </div>
          <div class="container">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12" id="">
                  <iframe  src="/assets/{{$id->file}}"></iframe>
                  {{$id->name}}
                  {{$id->description}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

@endsection