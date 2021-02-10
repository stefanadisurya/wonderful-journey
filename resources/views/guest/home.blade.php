@extends('layouts.master')

@section('title', 'Wonderful Journey | Home')

@section('styles')
    <style>
        .card {
            -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.15);
        }
        
        .jumbotron {
            background-image: url('assets/image/header.jpg');
            background-repeat: no-repeat;
            background-position: center;
            height: 500px;
            margin-top: -120px;
        }

        .jumbotron .display-4 {
            margin-top: 150px;
        }
    </style>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4 text-white">Wonderful Journey</h1>
      <p class="lead text-white">Blog of Indonesia Tourism</p>
    </div>
</div>

<div class="container">
    <p class="h1 text-center my-4 font-weight-bold">Articles</p>
    <div class="row">
        @forelse($articles as $article)
            <div class="col-md-4 col-sm-6 d-flex justify-content-center my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/image/' . $article->image) }}" class="card-img-top" style="height: 15rem;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $article->title }}</h5>
                        <p class="card-text">{{ substr($article->description, 0,  84) }} ...</p>
                        <p class="card-text font-italic"><b>Category:</b> <a href="#" class="text-decoration-none">{{ $article->category->name }}</a></p>
                        <a href="/article/{{ $article->id }}" class="text-decoration-none">
                            <button class="btn btn-dark btn-block">Full story</button>
                        </a>
                    </div>
                </div>
            </div>

            @empty
                <div class="d-flex text-center my-5">
                    <p class="h4 text-muted">No article to display</p>
                </div>
        @endforelse
    </div>
</div>
@endsection