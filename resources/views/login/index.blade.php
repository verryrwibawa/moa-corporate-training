@extends('layouts.main')
 
@section('container')
  <section class="p-0 vh-100">
    @include('partials.navbar')
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <main class="form-signin w-100 mx-auto">

            {{-- LOGIN GAGAL --}}
            @if(session()->has('email'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('email') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form action="/login" method="POST">
              @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
              <h1 class="h3 mb-4 fw-normal text-center ">Login</h1>
          
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com" required autofocus>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
           
              <button class="w-100 btn btn-lg btn-primary fs-6" type="submit">Login</button> 
            </form>
          </main>
        </div>
      </div>
    </div>
  </section>
@endsection