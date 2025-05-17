@extends('layouts.app')

@section('content')
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="cart_section">
          <div class="container-fluid">
              
              <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                      
                      <div class="cart_container">
                          <div class="cart_title">Shopping Cart<small> (Select an item from your cart) </small></div>
                          <div class="cart_items">
                              <ul class="cart_list">
                              <table class="table">
                                <tr Style="color: #b0b435;">
                                    <th scope="col"><p><h5><b>Product Image</b></h5></p></th>
                                    <th scope="col"><p><h5><b>Product Name</b></h5></p></th>
                                    <th scope="col"><p><h5><b><center>Quantity</center></b></h5></p></th>
                                    <th scope="col"><p><h5><b>Price per quantity</b></h5></p></th>
                                    <th scope="col"><p><h5><b>Total Price</b></h5></p></th>
                                </tr>

                                @foreach($product as $product)
                                <tr>
                                    <th scope="col"><p><h5><b>
                                        <img src="/storage/{{$product->image}}"style="height:120px; width:170px;" >
                                    </b></h5></p></th>
                                    <th scope="col"><p><h2><b>{{ $product->name}}</b></h2></p></th>

                                    <th scope="col"><p><h5><b>
                                        <form action="/buynow" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="product">
                                        <div class="quantity">
                                            <button class="btn minus-btn disabled" type="button">-</button>
                                            <input type="text" name="quantity" max="5" id="quantity" value="1">
                                            <button class="btn plus-btn" type="button">+</button>  
                                        </div>
                                        </b></h5></p></th>
                                    <th scope="col"><p><h2><b>{{ $product->price}}</b></h2></p></th>
                                    <th scope="col"><p><h5><b>
                                    <p class="total-price">
                                        <span id="price">{{ $product->price}}</span>
                                    </p>
                                    </b></h5></p></th>
                                </tr>
                                @endforeach
                                </table>
                                 </ul>
                            </div>
                          

                        <!-- <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Order Total:</div>
                                <div class="order_total_amount">Price</div>
                            </div>
                        </div> -->
                        <div class="cart_buttons"> 
                    <a type="button" href="/home" class="button cart_button_clear">Continue Shopping</a> 
                        <button type="submit" class="button cart_button_checkout">Buy Now</button></form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // setting defult attribute of diable of minus button
    document.querySelector(".minus-btn").setAttribute("disabled","disabled");

    var valueCount

    //price
    var price =document.getElementById("price").innerText;
    function priceTotal(){
        var total = valueCount * price;
        document.getElementById("price").innerText =total 
    }


    document.querySelector(".plus-btn").addEventListener("click", function(){
        valueCount =document.getElementById("quantity").value;

        valueCount++;

        document.getElementById("quantity").value =valueCount;

        if(valueCount > 1)
        {
            document.querySelector(".minus-btn").removeAttribute("disabled");
            document.querySelector(".minus-btn").classList.remove("disabled")

        }
       
        //calling price
        priceTotal()

    })

    document.querySelector(".minus-btn").addEventListener("click", function(){
        valueCount =document.getElementById("quantity").value;

        valueCount--;

        document.getElementById("quantity").value =valueCount;

        if(valueCount ==1)
        {
            document.querySelector(".minus-btn").setAttribute("disabled","disabled")
        }
        

        //calling price
        priceTotal()
    })
</script>
<style>
.quantity{
    display: flex;
    justify-content: center;
}
.quantity button{
    width: 45px;
    height: 45px;
    border: 1px solid #000;
    color: #000;
    border-radius: 0;
    background: #fff;
}
.quantity input{
    border: none;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    text-align: center;
    width: 100px;
    font-size: 20px;
    color: #000;
    font-weight: 300;
}
.total-price{
    text-align: center;
    font-size: 30px;
}
</style>

@endsection
