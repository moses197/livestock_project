@extends('layout')

@section('title')
    Logout page
@endsection

@section('content')

<div class="form-content">
  <div>
    <p style="font-size: xx-large; font-weight: bold;">Register Page</p>
  </div>

  <form class="form-class">
    <div class="">
      <label for="inputEmail4" class="form-label">Email:</label>
      <input type="email" class="div-input" id="inputEmail4">
    </div>
    <div class="">
      <label for="inputPassword4" class="form-label">Password:</label>
      <input type="password" id="inputPassword4">
    </div>
    <div class="">
      <label for="inputAddress" class="form-label">Address:</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="">
      <label for="inputCity" class="form-label">City:</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="">
      <label for="inputState" class="form-label">State:</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</div>


@endsection