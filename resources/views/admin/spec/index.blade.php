@extends('layouts.admin')

@section('titre','Spec')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="5">Table Spec</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($specs as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->description}}</td>
                <td><a href="{{route('editSpec',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteSpec',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (count($specs)==0)
    <a href="{{route('addSpec')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Spec</button></a>
    @else
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul spec</span>
    @endif
</div>
@endsection
