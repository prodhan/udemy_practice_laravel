@extends('layouts.admin')

@section('content')
    <h2>Users</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Updated</th>
        </tr>
        </thead>

        @if($users)
        <tbody>

        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
            @endforeach
        </tbody>
        @endif
    </table>
@endsection