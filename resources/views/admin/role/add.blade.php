@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check() && Auth::id()<2)
    <form action="{{route('saveRole')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Ajout du Role</h1>

            <div class="form-group">
                <label for="role">Role</label>
                @error('role')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="role" name="role" value="{{old('role')}}">
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
