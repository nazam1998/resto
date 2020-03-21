@extends('layouts.admin')

@section('content')
    <div class="container">
    <h1 class="text-success text-center my-5">Hello {{$user->nom.' '.$user->prenom}}</h1>
    <p>Photo de Profil : <img src="{{asset('storage/'.$user->photo)}}" class="profile-photo" alt=""></p>
    <p>Nom : {{$user->nom}}</p>
    <p>Prenom : {{$user->prenom}}</p>
    <p>Email : {{$user->email}}</p>
    <p>Role : {{$role->role}}</p>
    @if($user->id_role>3 && !is_null($testimonial))
    <p> Testimonial : {{$testimonial->testimonial}}</p>
    @endif
    <a href="{{route('editProfile')}}"><button class="btn btn-success">Editer</button></a>
    </div>
@endsection