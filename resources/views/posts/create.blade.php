@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>create a post</h1>
            <hr>

            <form method="POST" action="/posts">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name='title'>
              </div>
              <label for="body"></label>
              <textarea id="body" name="body" class="form-control"></textarea>
              <button type="submit" class="btn btn-info mt-2 float-right">Publish</button>
            </form>

            @include('partials.errors')

        </div>

        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
    </div>


@endsection
