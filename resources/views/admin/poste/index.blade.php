@extends('layouts.admin')

@section('titre','Poste')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="4">Table Poste</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Poste</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->poste}}</td>
                <td><a href="{{route('editPoste',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deletePoste',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @if (count($postes)==0) --}}
    <a href="{{route('addPoste')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Poste</button></a>
    {{-- @else
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul poste</span>
    @endif --}}
</div>
@endsection
