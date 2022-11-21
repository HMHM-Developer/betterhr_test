@extends('layouts.master')

@section('content')
<div class="login-form">
    <form action="{{ route('register') }}" method="post">
        @csrf
        @error('terms')
           <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="form-group">
            <label>Name</label>
            <input class="au-input au-input--full" type="text" name="name" placeholder="Name">
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Email Address</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Phone</label>
            <input class="au-input au-input--full" type="number" name="phone" placeholder="09xxxxxxx">
            @error('phone')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Address</label>
            <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
            @error('address')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
        
    </form>
    <div class="register-link">
        <p>
            Already have account?
            <a href="{{ route('auth#loginPage') }}">Sign In</a>
        </p>
    </div>
</div>
@endsection