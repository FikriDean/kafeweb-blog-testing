@extends('layouts.main')

@section('container')
<main class="form-signin m-auto">
  <form>
    <h1 class="h3 mb-4 fw-normal">Please sign up</h1>

    <form method="POST" action="{{ route('register.registerSubmit') }}">
      @csrf
      <div class="form-floating my-3">
        <input type="text" class="form-control rounded-3 @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
        <label for="name" class="d-flex">Name</label>
      </div>

      @error('name')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <div class="form-floating my-3">
        <input type="text" class="form-control rounded-3 @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
        <label for="username" class="d-flex">Username</label>
      </div>

      @error('username')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <div class="form-floating my-3">
        <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
        <label for="email" class="d-flex">Email address</label>
      </div>

      @error('email')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror
  
      <div class="form-floating my-3">
        <input type="password" class="form-control rounded-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
        <label for="password" class="d-flex">Password</label>
      </div>

      @error('password')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <button class="btn btn-primary w-100" type="submit" formmethod="post">Sign up</button>
    
    </form>

    <p class="mt-4 text-muted">&copy; 2022-2023</p>
  </form>
</main>
@endsection