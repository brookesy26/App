@extends('layouts.master')
@section('content')
<div class='mb-3'>
    <form>
        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username">
            <div class="form-text">Please enter a username</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div class="form-text">Please enter a password with a length of 8 or more</div>
        </div>
        <button type="submit" class="btn btn-success">Create Account</button>
       
    </form>
</div>
@endsection