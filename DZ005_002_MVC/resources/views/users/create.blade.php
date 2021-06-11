@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/users" method="post">
            @csrf
            <div class="row">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="row">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <br><br>
            <div class="row">
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

@endsection
