@extends('layouts.master')

@section('title', 'Wonderful Journey | Details')

@section('styles')
    <style>
        .jb-1 {
            background-image: url('../assets/image/header.jpg');
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

<div class="container d-flex justify-content-center">
    <div class="card my-3" style="width: 40rem">
        <img src="{{ asset('assets/image/' . $article->image) }}" class="card-img-top" style="height: 20rem;">
        <div class="card-body">
          <h3 class="card-title font-weight-bold">{{ $article->title }}</h3>
          <p class="card-text text-muted mt-3" style="font-size: 17px;">{{ $article->description }}</p>
          @if ($article->category->name == "Beach")    
            <p class="card-text font-italic"><b>Category:</b> <a href="{{ route('beach') }}" class="text-decoration-none">{{ $article->category->name }}</a></p>
          @elseif ($article->category->name == "Mountain")
            <p class="card-text font-italic"><b>Category:</b> <a href="{{ route('mountain') }}" class="text-decoration-none">{{ $article->category->name }}</a></p>
          @endif
          <p class="card-text" style="font-size: 17px;"><small class="text-muted">Last updated at {{ $article->updated_at->format('D, M d Y') }}</small></p>
          <a href="{{ url()->previous() }}" class="text-decoration-none">
              <button class="btn btn-outline-dark">Back</button>
          </a>
        </div>
      </div>
</div>
@endsection