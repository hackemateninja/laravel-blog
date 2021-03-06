@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
      <h2 class="blog-post-title">{{$post->title}}</h2>
      <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
      <p>{{$post->body}}</p>
      <hr>
      <div class="comments">
          <ul class="list-group">
              @foreach ($post->comments as $comment)
                  <li class="list-group-item">
                      <strong>
                          {{$comment->created_at->diffForHumans()}}
                      </strong>
                      : {{$comment->body}}
                  </li>
              @endforeach
          </ul>
      </div>
      <hr>
      <div class="card">
          <div class="card-block">
              <form method="post" action="/posts/{{$post->id}}/comments">
                  {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" placeholder="your commet here" class="form-control"></textarea>
                    </div>
                    @include('layouts.errors')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

              </form>

          </div>

      </div>
    </div><!-- /.blog-post -->
</div>
@endsection
