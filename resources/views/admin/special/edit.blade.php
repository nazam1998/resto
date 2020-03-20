@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check() && Auth::id()<2)
    <form action="{{route('updateSpecial',$special->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Ajout du Spec</h1>

            <div class="form-group">
                <label for="titre">Titre</label>
                @error('titre')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre',$special->titre)}}">
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <textarea class="form-control" id="description" name="description">{{$special->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                @error('logo')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="file" class="form-control-file" id="logo" name="logo"/>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Catégorie</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_cat">
                    @foreach ($categories as $item)
                    @if($item->id==$special->id_cat)
                    <option value="{{$item->id}}" selected>{{$item->categorie}}</option>
                    @else 
                    <option value="{{$item->id}}">{{$item->categorie}}</option>
                    @endif
                    @endforeach
                </select>
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
