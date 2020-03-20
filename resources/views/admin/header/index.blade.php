@extends('layouts.admin')

@section('titre','Header')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="6">Table Header</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Banniere</th>
                <th>Titre</th>
                <th>Logo</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($header as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td><i class="{{$item->icone}}"></i></td>
                <td><img class='img-fluid' src="{{asset('storage/'.$item->banniere)}}" alt=""></td>
                <td><a href="{{route('editHeader',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteHeader',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (count($header)==0)
    <a href="{{route('addHeader')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Header</button></a>
    @else 
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul header</span>
    @endif
</div>
@endsection
