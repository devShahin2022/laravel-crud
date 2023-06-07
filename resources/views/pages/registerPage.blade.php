
@extends('layouts.master')
@section("title", "Register")
@section('content')
<h1 class="display-3 text-center my-2">Register</h1>
   <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <form action="/handle-register" method="POST" class="my-3">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input  value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Keep me login</label>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
      </form>
   </div>
@endsection