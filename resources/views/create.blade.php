
    @extends('layouts.app')

@section('content')  
<br><br><br><br><br>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="/img/Tlogo.png" alt="" style="height: 75px; width: 100px;">
                        <h3>AgroPal</h3>
                        <p>Hey! Lets add a product here and sell in AgroPal.</p>
                      <a href="/viewaddedproducts">   <input type="submit" value="ADDED PRODUCTS"><br></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add a new product here.</h3>
                                <div class="row register-form">





   <form action="/storeProduct" enctype="multipart/form-data" method="POST" >
@csrf

<div class="card-body">Product Name:
<input class="form-control me-2" type="text" placeholder="Enter a product name" name="name"></div>

<div class="card-body">Number of quantity:
<input class="form-control me-2" type="Text" placeholder="Enter number of quantity of a product" name="quantity"></div>

    <div class="card-body">Price:
    <input class="form-control me-2" type="text" placeholder="Enter price of a product" name="price"></div>
    
    <div class="card-body">Product Description:
    <textarea class="form-control me-2" type="text" placeholder="Enter a product description" name="description"></textarea></div>

    <div class="card-body">Product Image
    <input type="file" placeholder="Inser product image" name="image"></div>

<center>
<button class="btn btn-primary" id="signup">submit</button></center>
<br>

</form> 

@endsection