@extends('layouts.master')

@section('title', 'Wonderful Journey | Blog')

@section('styles')
    <style>
        .card {
            -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.15);
        }
        
        .jumbotron {
            background-image: url('../assets/image/header.jpg');
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

<p class="h1 text-center my-4 font-weight-bold">My Blog List</p>

<div class="container my-3">
    <a href="{{ route('create') }}" class="btn btn-success">+ Create new blog</a>
</div>

<div class="container d-flex justify-content-center">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <a href="/user/{{ $user->id }}/blog/{{ $article->id }}">
                        {{ $article->title }}
                    </a>
                </td>
                <td>{{ $article->category->name }}</td>
                <td>
                    <form action="/user/blog/{{ $article->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <th scope="row">-</th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            @endforelse
        
        </tbody>
    </table>
</div>
@endsection