@extends('layouts.master')
@section('content')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{ $post->title }}
          </h3>

          <p>{{ $post->body }}</p>






          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->



      </div><!-- /.row -->

    </main><!-- /.container -->
@endsection
@section('footer')

@endsection
