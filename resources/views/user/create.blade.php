@extends('layouts.main')

@section('title', 'Home page')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
     <h1> Register form </h1>
     <form action="{{ route('user.store') }}" method="post">
        @csrf

     <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name = "name" type="text" class="form-control" id="name" placeholder="Name">
     </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name = "email" type="email" class="form-control" id="email" placeholder="Email">
     </div>

     <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name = "password" type="password" class="form-control" id="password" placeholder="Password">
     </div>

     <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input name = "password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password">
     </div>

     <button type="submit" class = "btn btn-primary">Register</button>
     <a href="{{ route('login') }}" class = "ms-3">Already registered?</a>
</form>
</div>
</div>
@endsection
