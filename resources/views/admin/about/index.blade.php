@extends('layouts.admin')

@section('titre','About')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="5">Table About</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->description}}</td>
                <td><a href="{{route('editAbout',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteAbout',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (count($abouts)==0)
    <a href="{{route('addAbout')}}"><button class="btn btn-primary my-5">Ajouter un nouveau About</button></a>
    @else
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul about</span>
    @endif
</div>
@endsection
