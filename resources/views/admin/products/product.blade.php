@extends('admin.layout.main')
@section('content')

<h1>Product</h1>
<div class="container">
    <form action="/save" method="POST" enctype="multipart/form-data">
        @csrf
        Name: <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
        Image: <input class="form-control form-control-lg" type="file" name="image">
        Description: <input class="form-control form-control-lg" type="text" name="description" placeholder="....">
        Price: <input class="form-control form-control-lg" type="float" name="price" placeholder="Total amount"><br>
        <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Select Category</option>
            @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <hr>
    <div class="containers">
        <div class="row">
            @foreach($allPro as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top " style="height:350px" src="{{ asset($product->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        Price: <u class="card-text" style="font-family:'nunito'">{{ $product->price }}</u><br>
                        Category: <u class="card-text" style="font-family:'nunito'">{{ $product->category['name'] }}</u>

                        <p class="card-text">{{ $product->description }}</p>
                        <a href="/delete/{{$product->id}}" class="btn btn-primary">Delete</a>
                        <a href="/edit/{{$product->id}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection