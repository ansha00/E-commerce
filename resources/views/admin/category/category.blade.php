@extends('admin.layout.main')
@section('content')
<h1>Category</h1>
<div class="container">
  <form action="{{route('category')}}" method="POST">
    @csrf
    Name: <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name"> <br>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  <hr>

  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
      </tr>

      @foreach($admins as $admin)
      <tr>
        <td>{{$admin->id}}</td>
        <td>{{$admin->name}}</td>
        <td><a href="/category/delete/{{$admin->id}}">delete</a></td>
      </tr>
      @endforeach

    </thead>
  </table>

  @endsection