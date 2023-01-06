@extends('layouts/main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Silahkan Mendaftar Dulu</h1>
                <form action="/register" method="POST">
                  {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                  @csrf
                  <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="masukan nama..." autofocus>
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                      <div id="name" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="masukan username...">
                    <label for="username">Username</label>
                    @error('username')
                      <div id="username" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                      <div id="email" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                      <div id="password" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                
                  <p class="mt-2 mb-3 text-muted">Sudah Punya Akun? <a href="/login">Login Now</a></p>
                </form>
            </main>
        </div>
    </div>
@endsection