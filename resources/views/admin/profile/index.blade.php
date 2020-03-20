@extends('layouts.admin')

@section('content')
    <div class="container">
    <h1 class="text-success text-center my-5">Hello {{$user->nom.' '.$user->prenom}}</h1>
    <p>Nom : {{$user->nom}}</p>
    <p>Prenom : {{$user->prenom}}</p>
    <p>Email : {{$user->email}}</p>
    <p>Photo de Profil : <img src="{{'storage/'.$user->photo}}" alt=""></p>
    <p>Role : {{$role->role}}</p>
    @if (!is_null($poste))
    <p>Poste : {{$poste->poste}}</p>
    @endif
    @if (!is_null($testimonial))
    <p> Testimonial : {{$testimonial->testimonial}}</p>
    @endif
    <a href="{{route('editProfile')}}"><button class="btn btn-success">Editer</button></a>
    </div>
@endsection