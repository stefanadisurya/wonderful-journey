@extends('layouts.master')

@section('title', 'Wonderful Journey | About Us')

@section('styles')
    <style>
        .jumbotron {
            background-image: url('assets/image/header5.jpg');
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
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="card mb-5 mt-5 border-light" style="max-width: 500rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/image/about.jpg') }}" style="width: 18rem; height: 20rem;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h1 class="card-title font-weight-bold">Who are we?</h1>
                      <p class="card-text mt-5 text-muted" style="font-size: 17px;">Established since 2020, we are a group of young people who love<br>Indonesia. We intend to contribute to Indonesia by providing information<br>about tourist attractions in Indonesia. We believe that Indonesia is a world class<br>tourist asset and worth a visit. With this effort, we hope that Indonesia's tourist attractions can become more and more known to the world.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-lg-12 d-flex justify-content-center">
            <div class="card mb-5 mt-5 border-light" style="max-width: 500rem;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h1 class="card-title font-weight-bold">What do we do?</h1>
                      <p class="card-text mt-5 text-muted" style="font-size: 17px;">We capture images, process them, and provide information to you about tourist attractions in Indonesia. We provide an overview for your vacation in Indonesia.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="{{ asset('assets/image/about2.jpg') }}" style="width: 18rem; height: 20rem;" alt="...">
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection