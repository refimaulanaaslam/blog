@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-3">
    <div class="col-md-4">
        @if (session()->has('succes'))
            <div class="alert alert-succes alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin w-100 m-auto">
            <div class="card shadow">
                <div class="card-body">
                     <form action="/login" method="post">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                    
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-flex justify-content-center mt-3">Not Registered? <a href="/register" class="text-decoration-none"> Registered Now!</a></small>
                </div>
            </div>
           
        </main>

    </div>
</div>
@endsection