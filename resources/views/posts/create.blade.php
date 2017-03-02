@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <h1>publish a post</h1>
    <form method="post" action="/posts">
        {{ csrf_field() }}
        @include('layouts.errors')
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea name="body" rows="25" class="form-control" id="body" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">publish</button>
    </form>
</div>
@endsection
