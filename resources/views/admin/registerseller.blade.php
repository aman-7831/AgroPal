<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('AgroPal', 'AgroPal') }}</title>
    <link rel="shortcut icon" href="/img/Tlogo.png" >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- Styles -->
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<style>
 body
{
    background-image: url('/img/bg.jpg');
} 
</style>
<body>
    <nav class="navbar">
        <span class="openslide">
            <a href="#" onclick="opensidemenu()">
            <i class="fas fa-bars"><span style="margin-left: 20px">Menu</span></i>
            </a>
        </span>
    </nav>
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closesidemenu()">&times;</a>
        <br>
        <center>
        <img src="/img/Tlogo.png" style="height:50px; width:50px;"></center>
        <a href="/dashboard">Home</a> <br>
        <a href="/admin_user_details">User Details</a> <br>
        <a href="/admin_product_details">Product Details</a> <br>
        <a href="/reg_buyer">Register buyer</a> <br>
        <a href="/reg_seller">Regster Seller</a><br>
        <a href="/orders">Recent Orders</a><br>
        <a href="/contact/messages">Contact Message</a><br>

    </div>
    <div id="main">
    <center><h1>Hello! Admin, you can view all <b><u>Registered seller</u></b> here.<hr></h1></center>
    <br><br>
    <center>
    <table class="table table-dark table-hover">
    <tr>
    <th scope="col"><p>Seller ID<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>Seller Name<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>Pan Number<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>Email-address<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>Contact number<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p>Address<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p>Verify/ Unverify<hr></p></th><th></th><th></th><th></th><th></th>
    </tr>
    
    @forelse($users as $user)

    <tr>
    <h1 style="background-color: black; height: 30px; padding:10px;"> Please verify the seller to add product </h1>
      <th scope="col"><p>{{$user->id}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->companyname}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->pannumber}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->email}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->number}}<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p>{{$user->address}}<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p><a id="login" href="/verifyseller/{{$user->id}}"> verify</a>
    <hr></p></th><th></th><th></th><th></th><th></th>
    </tr>
    @empty
    @endforelse


    @forelse($sellers as $user)
   
    <h1 style="background-color: black; height: 30px; padding:10px;">
    These are your verified seller.
    </h1>
    <th scope="col"><p>{{$user->id}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->companyname}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->pannumber}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->email}}<hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p>{{$user->number}}<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p>{{$user->address}}<hr></p></th><th></th><th></th><th></th><th></th>
    <th scope="col"><p><a id="signup" href="/unverifyseller/{{$user->id}}">Un Verify</a>
    <hr></p></th><th></th><th></th><th></th><th></th>
    </tr>
    @empty
    @endforelse
    </table>
</center>

</div>

    <script>
    function opensidemenu(){
        document.getElementById('side-menu').style.width='250px';
        document.getElementById('main').style.marginLeft='250px';   
    }
    function closesidemenu(){
        document.getElementById('side-menu').style.width='0px';
        document.getElementById('main').style.marginLeft='0px';
    }
    </script>
</body>
<script>

</script>