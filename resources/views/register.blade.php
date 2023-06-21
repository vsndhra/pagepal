@extends('master')
@section('title')
    Register
@endsection
@section('content')
<section class="flex-shrink-0">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="pb-2">Register for Page Pal</h1>
                <p class="lead">To search our database of 5,000 books, read reviews by readers like you, or add your own reviews, you’ll need to register.</p>
                <p class="lead">Registration at Page Pal is free, and we will never share your information.</p>
                <div class="text-center">
                    <img class="img-fluid" src="{{ asset('images/books.jpg') }}" alt="Illustration of Books" style="max-width: 320px; vertical-align: middle;">
                    <p class="text-center">
                        <small class="text-muted"> Illustration from <a href="" target="_blank">tumblr/mostlyghostie</a>.</small>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="form-box">
                    <form action"#" method="POST">
                        <div class="form-group">
                            <label for="username">Username (3 to 5 letters)</label>
                            <input id="username" class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email">
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password (5 to 8 letters)</label>
                            <input id="password" class="form-control" type="password" name="password">
                        </div>
                        <div class="button-group">
                            <button class="btn btn-dark" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection