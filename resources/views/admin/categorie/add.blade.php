@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check() && Auth::id()<2)
    <form action="{{route('saveCategorie')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Ajout du Categorie</h1>

            <div class="form-group">
                <label for="categorie">Catégorie</label>
                @error('categorie')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="categorie" name="categorie" value="{{old('categorie')}}">
            </div>
            
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    @else
    <h1 class="text-danger">Désolé, vous n'avez pas l'autorisation d'accéder à cette page
        <span class="text-danger">Veuillez vous connecter avec le compte correspondant</span>
    </h1>
    @endif
</div>
@endsection
