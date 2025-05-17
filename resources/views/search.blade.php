@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br>
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
<div class="container">
    <h1 class="text-center">The search reasult of the products are:</h1>
        <hr>
        </div>


<div>
@if(isset($products))
<!-- <p>the search results for your query</p>{{$q}}
</b>are </b>
product details  -->
<br><br><br><br><br><br><br><br><br>

@foreach ($products as $product)
<div class="product">
     <div class="imgbox"> 
         <img src="/storage/{{$product->image}}"> </div>
     <div class="specifies">
         <h2>{{ $product->name }}<br> <span>Categories</span></h2>
         <div class="price">Rs. {{$product->price}}</div> 
         <br>
         <div class="buttons d-flex justify-content-center"> 
         <a href="/productdetails/{{ $product->id}}" class="buy_now btn-success">see more</a>
</div>
         </div>
 </div>
 <br>


@endforeach



@else 
<br><br><br><br>
<h1 class="text-center">Sorry! The product which you have searched is not available on our platform.</h1>
@endif


</div>



@endsection