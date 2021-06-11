@extends('layouts.app')

@section('content')
    <div class="row">
        <a class="btn btn-block btn-primary" href="/users/create">New</a>
    </div>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        @foreach($users as $row)
            <tr>
                <th scope="row">{{$row->id}} </th>
                <td> {{$row->username}}</td>
                <td> {{$row->password}}</td>
                <td> {{$row->email}}</td>
                <td><a href="/users/{{$row->id}}/edit" class="btn btn-primary btn-xs"> Edit</a>
                </td>
                <td>
                    <form action="/users/{{$row->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
