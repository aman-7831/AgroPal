@extends('layouts.app')

@section('content')
<br><br><br><br>
<center>
<table>
    <tr>
        <th>
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="/img/user.jpg" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> 
            <b>User Name : </b>{{$user->buyerprofile->firstname}} {{$user->buyerprofile->lastname}}<br>
            <b>Email : </b>{{$user->buyerprofile->email}}<br>
            <b>Phone Number : </b>{{$user->buyerprofile->phonenumber}}<br>
            <b>Shipping Address : </b>{{$user->buyerprofile->shippingaddress}}<br>
            <b>Billing Address : </b>{{$user->buyerprofile->billingaddress}}


        </div>
    </div>
    <div class="py-2">
        <form action="/buyer/account" method="POST">
        @csrf
        <div class="row py-2">
            <div class="col-md-6"> <label for="firstname">First Name</label> 
            <input type="text" class="bg-light form-control" placeholder="First Name" name="firstname"> 
            </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> 
            <input type="text" class="bg-light form-control" placeholder="Last Name" name="lastname"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="email">Email Address</label> 
            <input type="text" class="bg-light form-control" placeholder="example@email.com" name="email"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> 
            <input type="tel" class="bg-light form-control" minlength="10" maxlength="10" placeholder="+977-999999999" name="phonenumber"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="country">Shipping Address</label>
            <input type="tel" class="bg-light form-control" name="shippingaddress" placeholder="Bagmati, Kathmandu Metro 13 - Kalimati Area, Bafal"></div>
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Billing Address</label>
                <div class="arrow"> <input type="tel"name="billingaddress" class="bg-light form-control" placeholder="Bagmati, Kathmandu Metro 13 - Kalimati Area, Bafal"> </div>
            </div>
        </div>
        <div class="py-3 pb-4 border-bottom"> <button class="btn" id="signup">Save Changes</button>
        
         <!-- <button class="btn" id="login">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b>Delete your account</b>
                <p>Delte your account from AgroPal.</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Delete</button> </div> -->
            </form>
        </div>
    </div>
</div>
</th>

<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>

    <th>    
    <div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Order History</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> 
      <a href="/cart">  <img src="/img/cart.jpg" class="img" alt=""></a>
        <div class="pl-sm-4 pl-5" id="img-section">
        <a href="/">  <img src="/img/pay.jpg" class="img" alt=""></a>
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
        <table class="table">
    <tr>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name<th>
      <th scope="col">Quantity</th>
      <th scope="col">Ordered date</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>  
    <!-- <tr>
      <th scope="row">saca</th>
      <td>Mark</td>
      <td></td>
      <td>Otto</td>
      <td>3/15/2021</td>
      <td>@mdo</td>
      <td><a href="">Manage</a></td>
    </tr> -->
    <tr>
</table>
        </div>
    </div>
</div>
    </th>
    <tr>
</table>
        @endsection