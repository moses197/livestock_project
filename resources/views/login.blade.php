@extends('layout')

@section('title')
    login page
@endsection

@section('content')

<div class="form-content">
  <div><p style="font-size: xx-large; font-weight: bold;">Login Page</p></div>
  <form class="form-class">
      <div>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div>
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div><a href="" style="text-decoration: none;">Forget Password</a></div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection









