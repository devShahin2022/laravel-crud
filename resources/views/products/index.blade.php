@extends('layouts.master')
@section('title',"Products crud")
@section('content')

<div class="container">
    <h1 class="text-center my-3">Products</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $product->name }}</td>
                <td><img src="prodcuts/{{ $product->image }}" class="rounded-circel" width="50px" height="50px"></td>
                <td>
                     <a href="products/{{ $product->id }}/edit" class="btn btn-info">Edit</a> 
                     <a href="products/{{ $product->id }}/delete" class="btn btn-danger">Delete</a> 
                
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{$products->links()}}
</div>

@endsection