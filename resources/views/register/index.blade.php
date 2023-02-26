@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-3">
    <div class="col-md-4">
        <main class="form-registrasi w-100 m-auto">
            <div class="card shadow">
                <div class="card-body">
                     <form>
                        <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
                        <div class="form-floating mb-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" name="password" class="form-control" id="p   assword" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
                    </form>
                    <small class="d-flex justify-content-center mt-3">Have an account?  <a href="/login" class="text-decoration-none"> Login</a></small>
                </div>
            </div>
           
        </main>

    </div>
</div>
@endsection