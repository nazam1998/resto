@extends('layouts.admin')

@section('titre','Role')
@section('content')
<div class="text-center container">

    <table>
        <thead>
            <tr>
                <th colspan="4">Table Role</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Role</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->role}}</td>
                <td><a href="{{route('editRole',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteRole',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @if (count($roles)==0) --}}
    <a href="{{route('addRole')}}"><button class="btn btn-primary my-5">Ajouter un nouveau Role</button></a>
    {{-- @else
    <span class="text-danger">Désolé, vous ne pouvez ajouter qu'un seul role</span>
    @endif --}}
</div>
@endsection
