@extends('layouts.admin')

@section('content')
<div class="container text-center">

    <table>
        <thead>
            <tr>
                <th colspan="10">Table Users</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->email}}</td>
                <td>{{App\Role::all()->where('id',$item->id_role)->first()->role}}</td>
                @if ($item->id_role>Auth::user()->id_role)
                <td><a href="{{route('editUser',$item->id)}}"><button class="btn btn-warning">Edit</button></a></td>
                <td><a href="{{route('deleteUser',$item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
                @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
