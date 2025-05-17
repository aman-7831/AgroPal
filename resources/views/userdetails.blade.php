<!-- Tha xaina  -->

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