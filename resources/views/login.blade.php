@extends('master')
@section('content')
<div class="container custom-login">
<div class="row mb-50">
 <div class="col-sm-4"></div>   
<div class="col-sm-4 col-sm-offset-4">
<form>
     <br>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <!--<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@stop