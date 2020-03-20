@extends('layouts.admin')

@section('titre','Categorie')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="4">Table Categorie</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Categorie</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->categorie}}</td>
                <td><a href="{{route('editCategorie',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteCategorie',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @if (count($categories)==0) --}}
    <a href="{{route('addCategorie')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Categorie</button></a>
    {{-- @else
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul categorie</span>
    @endif --}}
</div>
@endsection
