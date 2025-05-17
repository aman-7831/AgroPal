<!-- Tha xaina  -->


@extends('layouts.app')

@section('content')
<br><br><br>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="/img/Tlogo.png" alt="" style="height: 75px; width: 100px;">
                        <h3>Welcome to AgroPal</h3>
                        <p>An online platform where you can buy and sell organic products.</p>
                        <a href="#">    <input type="submit" value="View added products"><br></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Hey! Admin. Let's add a product here. </h3>
                                <div class="row register-form">
            
<div>

</div>




<p>




</p>




<!-- Added products  -->

<div class="container">
<hr>
   <center> <h1 class="text-center">The Added products are:</h1></center>
        <hr>
        </div>
<p>
        <table class="table table-dark table-hover">
        <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Available quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)

    <tr>
      <th scope="row">1</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->quantity}}</td>
      <td> {{$product->description}}
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

    </tbody>
</table>
</p>




<table class="table table-dark table-hover">
        <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">User Name</th>
      
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)

    <tr>
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <!-- <td>{{$user->price}}</td>
      <td>{{$user->quantity}}</td>
      <td> {{$user->description}}
</td> -->
      <td><form action="">
@csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">

<button id="signup">Edit</button>
</form>
</td>
<td><form action="" >
@csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">

<button id="login">Delete</button>
</form>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>




























            </div>
        </div>
    </div>
</div>
@endsection
