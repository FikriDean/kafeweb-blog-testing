@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Edit Profile</h1>
  <hr class="text-dark"/>

  <form action="/dashboard/user/{{ $user->username }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label text-dark">Name</label>
      <input type="text" class="form-control bg-light text-dark @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $user->name) }}" autofocus>
    </div>

    @error('name')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="username" class="form-label text-dark">Username</label>
      <input type="text" class="form-control bg-light text-dark @error('username') is-invalid @enderror" name="username" id="username" required value="{{ old('username', $user->username) }}">
    </div>

    @error('username')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="email" class="form-label text-dark">Email</label>
      <input type="email" class="form-control bg-light text-dark @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email', $user->email) }}">
    </div>

    @error('email')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3 d-flex flex-column">
      <label for="image" class="form-label text-dark">Profile Photo</label>
      <div class="alert alert-warning" role="alert">
        Recommended <strong>Square</strong> Shape
      </div>
      <img src="{{ asset($user->image) }}" alt="Profile Photo" class="p-3 text-dark w-25">
      <input class="form-control bg-light text-dark @error('category_id') is-invalid @enderror" type="file" id="image" name="image">
    </div>

    @error('image')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <button type="submit" class="btn btn-primary w-100">Update Profile</button>
    <a href="dashboard/user" class="btn btn-outline-primary w-100 mt-2">Back to Profile</a>
  </form>

@endsection



