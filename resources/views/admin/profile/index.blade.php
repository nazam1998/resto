@extends('layouts.admin')

@section('content')
    <div class="container">
    <h1 class="text-success text-center my-5">Hello {{$user->nom.' '.$user->prenom}}</h1>
    <p>Photo de Profil : <img src="{{asset('storage/'.$user->photo)}}" class="profile-photo" alt=""></p>
    <p>Nom : {{$user->nom}}</p>
    <p>Prenom : {{$user->prenom}}</p>
    <p>Email : {{$user->email}}</p>
    <p>Role : {{$role->role}}</p>
    @if($user->id_role==3 && !is_null($testimonial))
    <p> Testimonial : {{$testimonial->texte}}</p>
    <p> Note : {{$testimonial->note}}</p>
    @endif
    <a href="{{route('editProfile')}}"><button class="btn btn-success">Editer</button></a>
    </div>
    <div class="container text-center">
    @if (Auth::user()->id_role==3)
        @if(is_null(Auth::user()->id_testimonial))
        <a href="{{route('addTestimonial')}}"><button class="btn btn-primary">Ajouter Testimonial</button></a>
        @else 

        <a href="{{route('editTestimonial')}}"><button class="btn btn-warning">Editer Testimonial</button></a>
        <a href="{{route('deleteTestimonial')}}"><button class="btn btn-danger">Supprimer Testimonial</button></a>
        @endif
    @endif

    </div>
@endsection