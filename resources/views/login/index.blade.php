@extends('layouts/main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto">
              @if(session()->has("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session("success")}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

              @endif
              @if(session()->has("loginEror"))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session("loginEror")}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

              @endif
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Silahkan Login</h1>
                <form action="/login" method="POST">
                  {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                  @csrf
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="emial" name="email" placeholder="Masukan email" value="{{ old('email') }}" required autofocus>
                    <label for="emial" >Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                
                  <p class="mt-2 mb-3 text-muted">Belum Punya Akun? <a href="/register">Register Now</a></p>
                </form>
            </main>
        </div>
    </div>
@endsection