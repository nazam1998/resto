@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check())
    <form action="{{route('saveTestimonial')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Ajout du testimonial</h1>

            <div class="form-group">
                <label for="text">Testimonial</label>
                @error('texte')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="text" name="text" value="{{old('text')}}">
            </div>
            
            <div class="form-group">
                <label for="note">Note</label>
                @error('note')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="number" min='1' max='5' class="form-control" id="note" name="note" value="{{old('note')}}">
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
