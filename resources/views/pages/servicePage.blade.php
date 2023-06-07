@extends('layouts.master')
@section("title", "Add service")
@section('content')
<h1 class="display-3 text-center my-2">Add service</h1>
   <div class="container">
     <form method="post" action='#'>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="">
          <textarea class="w-100" placeholder="Type your message" name="" id="" cols="" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-5">Add service</button>
      </form>
   </div>
@endsection