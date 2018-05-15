@extends('layouts.master')
@section('content')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main" style="margin-bottom:100px;">




          <div class="comments my-3">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">{{ $post->title }}<span class="text-muted float-right" style="font-family:Helvetica;font-size:0.7em;">{{ $post->created_at->diffForHumans()}}</span></h6>

                    <p class="card-text">
                        {{ $post->user->name }} :
                        {{ $post->body }}
                    </p>
                   </div>
                </div>
          </div>
          {{-- comments --}}
          <div class="comments my-3">
              @foreach ($post->comments as $comment)
                <div class="card my-2">
                  <div class="card-body">
                        <h6 class="card-title text-info">John Doe said:<span class="float-right text-muted"style="font-size:13px;">{{ $comment->created_at->diffForHumans()}}</span></h6>
                        <p class="card-text text-muted">{{ $comment->body }}</p>
                   </div>
                </div>
                @endforeach
          </div><hr>
          {{-- add a comment --}}
          <div class="comments">

                <div class="card">
                    <div class="card-header bg-light">
                        Respond...
                    </div>
                  <div class="card-block" style="margin-bottom:-70px;">
                      <form method="POST" action="/posts/{{ $post->id}}/comments">
                          {{ csrf_field() }}
                        <div class="form-group">
                          <textarea name="body" class="form-control" placeholder="your comment here" rows=6></textarea>
                        </div>
                        <button type="submit" class="btn btn-info float-right">Add Comment</button>
                    </form>
                   </div>
                </div>
                <div style="margin-top:100px;">
                    @include('partials.errors')
                </div>

          </div>




        </div><!-- /.blog-main -->



      </div><!-- /.row -->

    </main><!-- /.container -->
@endsection
@section('footer')

@endsection
