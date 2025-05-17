@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><center>
<div class="container">
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Get in touch with AgroPal</h3>
            <p class="text"> Contact us with the following details and fillup the form for more inquiry. </p>
            <div class="info">
                <div class="social-information"> <i class="fas fa-map-marker-alt"></i>
                    <p>Kathmandu, Nepal.</p>
                </div>
                <div class="social-information"> <i class="far fa-envelope"></i>
                    <p>agropal@gmail.com</p>
                </div>
                <div class="social-information"> <i class="fas fa-mobile-alt"></i>
                    <p>+977- 98999999999 </p>
                </div>
            </div>
            <div class="social-media">
                <p>Connect with us :</p>
             <center>   <div class="social-icons">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="github"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
        <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
           
            <form action="/contact/message" method="post">
                
                @csrf
                <h3 class="title">Contact us</h3>
                <div class="social-input-containers">
                 <input type="text" name="name" class="input" placeholder="Name" /> </div>
                <div class="social-input-containers"> 
                <input type="email" name="email" class="input" placeholder="Email" /> </div>
                <div class="social-input-containers">
                 <input type="tel" name="phone" class="input" placeholder="Phone" /> </div>
                <div class="social-input-containers textarea"> 
                <input name="message" class="input" placeholder="Message"> 
                </div>
                 <button type="submit"  class="btn">submit</button>
            </form>

        </div>
    </div>
</div>
@endsection