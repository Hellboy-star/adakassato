@extends('def.def')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{ $sujets->theme }} </h5>
            <p>{{ $sujets->texte }}</p>
            <div class="d-flex justify-content-between">
                
                <span class="badge badge-primary"> {{ $sujets->auteur }} </span>
            </div>
        </div>
    </div>
    <hr>
    <h5>Commentaires</h5>
    @foreach ($sujets->comments as $comment)
    
        <div class="card mt-2">
            <div class="card-body">
                {{$comment->comment}}
                <div class="d-flex justify-content-between">
                    <small style="text-decoration: black;"> Posté le {{ $comment->created_at->format('d/m/Y') }} </small>
                    <span class="badge badge-primary"> {{ $comment->ncomment }} </span>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Aucun commentaire pour ce sujet.</div>
    
    @endforeach

    <form action="{{route('blog.store', $sujets)}}" method="post" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="content">Votre commentaire</label>
            <textarea class="form-control @error('content') is-invallid @enderror" 
            name="comment" id="comment" rows="5"></textarea>
            @error('content')
                <div class="invalid-feedback"> {{$error->first('content')}} </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary"> Soumettre mon commentaire </button>
    </form>
</div>

@endsection