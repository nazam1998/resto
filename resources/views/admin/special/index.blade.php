@extends('layouts.admin')

@section('titre','Special')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="7">Table Specialité</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Logo</th>
                <th>Categorie</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($specials as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->description}}</td>
                <td><img src="{{asset('storage/'.$item->logo)}}" alt="" srcset=""></td>
                <td>{{$categories->where('id',$item->id_cat)->first()->categorie}}</td>
                <td><a href="{{route('editSpecial',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteSpecial',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('addSpecial')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Special</button></a>
    
</div>
@endsection
