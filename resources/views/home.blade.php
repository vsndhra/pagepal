@extends('master')
@section('title')
    Page Pal Welcome
@endsection
@section('content')
<section class="flex-shrink-0">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/books.jpg') }}" class="img-fluid" alt="Illustration of Books" style="padding-top: 40px;">
                <p class="text-center">
                    <small class="text-muted">
                        Illustration from <a href="https://www.tumblr.com/mostlyghostie" traget="_blank">tumblr/mostlyghostie</a>. 
                    </small>
                </p>
            </div>
            <div class="col-md-6">
                <h1 class="pb-2">Welcome to Page Pal</h1>
                <p class="lead">Hello! You can search our database of 5,000 books, read reviews by readers like you, and add your own reviews.</p>
                <p class="lead">To get started, log in or <a href="{{ url('register') }}"> register</a>.</p>
                <div id="form-box">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password">
                        </div>
                        <div class="button-group">
                            <button class="btn btn-dark" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection