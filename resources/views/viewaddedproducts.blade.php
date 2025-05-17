@extends('layouts.app')

@section('content')
<br><br><br><br><br>

<div class="container">
<hr>
   <center> <h1 class="text-center">The Added products are:</h1></center>
        <hr>
        </div>
<p>
        <table class="table table-dark table-hover">
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Available quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Categories</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>

  @foreach($products as $product)

    <tr>
      <th scope="row"><img src="/storage/{{$product->image}}" style="height:10px; weight 10px;"></th>
      <td>{{$product->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td> {{$product->description}}</td>
      <td>Will be updated soon </td>
</td>
      <td><form action="/editProduct" method="POST">
@csrf
<input type="hidden" name="product_id" value="{{ $product->id }}">

<button id="signup">Edit</button>
</form>
</td>
<td><form action="/deleteProduct" method="POST">
@csrf
<input type="hidden" name="product_id" value="{{ $product->id }}">

<button id="login">Delete</button>
</form>
      </td>
    </tr>
    @endforeach
</table>
</p>

@endsection