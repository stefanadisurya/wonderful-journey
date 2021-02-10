@extends('layouts.master')

@section('title', 'Wonderful Journey | New Blog')

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

<div class="container">
    <p class="h1 text-center my-4 font-weight-bold">Profile</p>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-light my-3">
                <div class="card-body">
                    <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}:</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}:</label>

                            <div class="col-md-6">
                                <select id="category" name="category" class="custom-select form-control @error('category') is-invalid @enderror" required autofocus>
                                    <option value="Beach">Beach</option>
                                    <option value="Mountain">Mountain</option>
                                  </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}:</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" required>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Story') }}:</label>

                            <div class="col-md-6">
                                <input id="description" rows="5" cols="80" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
