@extends('layouts.master')
@section('title',"Products crud")
@section('content')

<div class="container">
    <h1 class="text-center">Add products</h1>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="products/store" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product name</label>
              <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input value="{{old('description')}}"  name="description" type="text" class="form-control" id="exampleInputPassword1">
              @if($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Choose image</label>
                <input value="{{old('image')}}" name="image" type="file" class="form-control" id="exampleInputPassword1">
                @if($errors->has('image'))
              <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
              </div>  
            
            <button type="submit" class="btn btn-primary mb-4">Add product</button>
          </form>
    </div>
</div>

@endsection