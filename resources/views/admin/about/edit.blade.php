@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check() && Auth::id()<2)
    <form action="{{route('updateAbout',$about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Edit du About</h1>

            <div class="form-group">
                <label for="titre">Titre</label>
                @error('titre')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre',$about->titre)}}">
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <textarea class="form-control-file" id="description" name="description">{{$about->description}}</textarea>
            </div>
    
        <button type="submit" class="btn btn-success">Editer</button>
    </form>
    @else
    <h1 class="text-danger">Désolé, vous n'avez pas l'autorisation d'accéder à cette page
        <span class="text-danger">Veuillez vous connecter avec le compte correspondant</span>
    </h1>
    @endif
</div>
@endsection
