@extends('layouts.app')

@section('content')
 <br><br><br><br>
<!-- <div class="container">
    <h1 class="text-center">Shop
    </h1>
    <hr>
</div> -->

<center>
<table>
    <tr>
        <th>
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Sell your products</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="/img/user.jpg" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> 
            <b>Seller Name : </b>{{$user->sellerprofile->companyname}}<br>
            <b>Email : </b>{{$user->sellerprofile->email}}<br>
            <b>PAN/VAT number : </b>{{$user->sellerprofile->pannumber}}<br>
            <b>Phone Number</b>{{$user->sellerprofile->number}}<br>
            <b>Address : </b>{{$user->sellerprofile->address}}
        </div>
    </div>
    <div class="py-2">
        <form action="/seller/store" method="POST">
        @csrf
        <div class="row py-2">
            <div class="col-md-6"> <label for="Companyname">Company Name</label> 
            <input type="text" class="bg-light form-control" name="companyname" placeholder="Seller / Company name"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="pannumber">PAN Number</label> 
            <input type="text" name="pannumber" class="bg-light form-control" placeholder="PAN Number"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="email">Email Address</label>
             <input type="email" name="email" class="bg-light form-control" placeholder="example@email.com"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
             <input type="tel" name="number" minlength="10" maxlength="10" class="bg-light form-control" placeholder="+977-999999999"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="address">Address</label>
            <input type="tel" name="address" class="bg-light form-control" placeholder="Bagmati, Kathmandu Metro 13 - Kalimati Area, Bafal"></div>
        </div>
        <div class="py-3 pb-4 border-bottom"> 
        <button class="btn" id="signup">Update</button></div>
</form>
    </div>
</div>
</th>

<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>

    <th>    
    <div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Check your account</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> 
      <!-- <a href="/checkreview"> 
      <center><img src="/img/review.png" class="img text-center" alt=""></center><br>Check your Review</a> -->
        <div class="pl-sm-4 pl-5" id="img-section">
        <a href="/createProduct">
        <center><img src="/img/addaproduct.jpg" class="img" alt=""></center><br>Add Product</a>
        </div>
        <div class="pl-sm-4 pl-5" id="img-section">
        <a href="/viewaddedproducts">  
        <center><img src="/img/viewaddedproduct.jpg" class="img" alt=""></center><br>View Added Product</a>
        </div>
    </div>
    <!-- <div class="py-2">
        <div class="row py-2">
        <div class="pl-sm-4 pl-5" id="img-section">
        <a href="/checkneworder">  
        <center><img src="/img/neworder.jpg" class="img" alt=""></center><br>Check new order</a>
        </div>
        <div class="pl-sm-4 pl-5" id="img-section">
        <a href="/checksoldorder">  
        <center><img src="/img/soldproducts.jpg" class="img" alt=""></center><br>Check Sold Products</a>
        </div>
        </div>
    </div> -->
</div>
@endsection