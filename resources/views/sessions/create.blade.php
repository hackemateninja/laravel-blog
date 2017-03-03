@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Sign In</h1>
        <form action="/login" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">email:</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="your email">
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="your password">
            </div>
            @include('layouts.errors')
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">login</button>
            </div>
        </form>
    </div>
@endsection
