@extends('layouts.app')

@section('content')
<br><br><br><br><br>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="/img/Tlogo.png" alt="" style="height: 75px; width: 100px;">
                        <h3>Welcome to AgroPal</h3>
                        <p>An online platform where you can buy and sell organic products.</p>
                        <a href="#">    <input type="submit" value="Add a new product"><br></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Edit a added Product. </h3>
                                <div class="row register-form">
<div>
<form action="/updateProduct" enctype="multipart/form-data" method="POST" >
@csrf

<div>Product Name:
<input type="text" class="form-control me-2" type="text" placeholder="Enter a product name" name="name"></div>

<div>Product Description:
<input type="text" class="form-control me-2" type="text" placeholder="Enter description of a product" name="description"></div>


<div>No of quantity:
<input type="text" class="form-control me-2" type="text" placeholder="Enter number of quantity available" name="quantity"></div>


<div>Price of a Product:
<input type="text" class="form-control me-2" type="text" placeholder="Enter a price of a product" name="price"></div>
<br>Product Image: <input type="file" name="image">
<input type="hidden" name="product_id" value="{{$request->product_id}}">

<br><br>
<center><button id="signup">Submit</button> </center>



















            </div>
        </div>
    </div>
</div>
@endsection
