@extends('layouts.master')

@section('content')
<div class="col-sm-8">
        <h1>register</h1>
    <form method="post" action="/register">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">name:</label>
            <input placeholder="your user name here" type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input placeholder="your email here" type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input placeholder="your new pasword here" type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">password confirmation:</label>
            <input placeholder="confirm your password" type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>
        @include('layouts.errors')

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">register</button>
        </div>

    </form>
</div>

@endsection
