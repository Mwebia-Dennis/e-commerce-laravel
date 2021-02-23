@extends('layouts.app')

@section('content')
    
    <div class="container">

        <div class="row">

            <div class="col-md-5 offset-md-3 p-5 border mt-5 rounded bg-light">

                <h3 class="text-center">Login</h3>
                <hr class="mb-5">
                <form action="login" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>

            </div>

        </div>

    </div>

@endsection