@extends('layout')
@section('title', 'Registration')
@section('content')
<div class="container"> 
    <form class="me-auto ms-auto mt-3" style="width: 500px">
  <div class="mb-3">
    <label  class="form-label">Full name</label>
    <input type="email" class="form-control" name="name">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection