@extends('def.def')

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