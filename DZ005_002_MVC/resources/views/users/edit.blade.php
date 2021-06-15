@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/users/{{$user->id}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id" />
            <div class="row">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}">
            </div>
            <div class="row">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
            </div>
            <br><br>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
