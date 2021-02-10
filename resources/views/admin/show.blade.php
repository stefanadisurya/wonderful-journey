@extends('layouts.master')

@section('title', 'Wonderful Journey | Details')

@section('styles')
    <style>
        .jb-1 {
            background-image: url('../../assets/image/header2.jpg');
            background-repeat: no-repeat;
            background-position: center;
            height: 500px;
            margin-top: -120px;
        }

        .jb-1 .display-4 {
            margin-top: 150px;
        }
    </style>
@endsection

@section('content')
<div class="jumbotron jb-1 jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4 text-white">Wonderful Journey</h1>
      <p class="lead text-white">Blog of Indonesia Tourism</p>
    </div>
</div>

<div class="container">
    <div class="card my-3">
        <img src="{{ asset('assets/image/' . $article->image) }}" class="card-img-top" style="height: 20rem;">
        <div class="card-body">
          <h3 class="card-title font-weight-bold">{{ $article->title }}</h3>
          <p class="card-text">{{ $article->description }}</p>
          <p class="card-text"><small class="text-muted">Last updated at {{ $article->updated_at->format('D, M d Y') }}</small></p>
          <div class="row">
              <div class="col-md-1 mt-2">
                  <a href="{{ route('home') }}" class="text-decoration-none">
                      <button class="btn btn-outline-dark">Back</button>
                  </a>
              </div>

              <div class="col-md-2 mt-2">
                  <form action="/admin/article/{{ $article->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete Article</button>
                </form>
              </div>
          </div>

        </div>
      </div>
</div>
@endsection