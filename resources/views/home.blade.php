@extends('layouts.app')

@section('content')
      <!-- Searchbar -->
      <section class="search-bar">
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto">
                      <form action="/searchProduct" method="POST" role="search">
                          <div class="p-1 bg-light shadow-sm">
                              <div class="input-group">
                              @csrf
                                  <input type="search" placeholder="Search for a products" name="search" class="form-control" aria-label="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                  </div>
                              </div>
                          </div>
                      </form>

                  </div>
              </div>
          </div>

      </section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<br>


<!-- Product -->
<div class="container">
        <h1 class="text-center">Available Products</h1>
        <hr></div>
 
<div class="container">

  <div class="row"> 
    @foreach($products as $product)
      <div class="card" style="width: 16rem;">
        <div class="product-grid">
         <div class="image">
            <a href="#">
              <p>
              <center> 
              <img src="/storage/{{$product->image}}" alt="product image" style="height:200px;width:250px">
              </center>
            </p>
            </a>
          </div>
            <center> <h2 class="text"><b> {{$product->name}}</b></h2></center>
             <h4 class="price" style="margin:8px;">Rs. {{$product->price}}</h4>
             <p style="margin:10px;" ><b><span>Limited Quantity: </span>{{$product->quantity}}</b>
              <a href="/productdetails/{{ $product->id}}">View to order</a></p>
             <center> 
             <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    
              <form action="/cart/store" method="POST">
                    @csrf
                  <input type="hidden" name = "product_id" value="{{$product->id}}">
                   
                    <button href="{{$product->cart}}" class="buy_now btn-success">Add to cart </button> 
                    </form>
                  
</center>
        </div>
           <div class= "col-md-1">
            </div>
       </div>
       <br>
       @endforeach 
      </div>
       
</div> 
</div> 



@endsection