@extends('layouts.guest')
@section('title', 'Login')
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh ">
        <div class="card p-2 w-lg-50 rounded shadow-lg" style="background:transparent">
            <div class="card-title border-bottom">
                <h2 class="text-center" class="text-white">
                    Login
                </h2>
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <a href="{{ route('register') }}" class="text-white">Not Registered ?? Click to Registerd</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
