@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="login-container">
    <div class="main-ttl">
        Login
    </div>
    <div class="login-form">
        <form action="/login" method="post">
            @csrf
            <div class="login-input">
                <div class="input-container">
                    <img src="images/mail.svg" width="26" height="26">
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-container">
                    <img src="images/key.svg" width="26" height="26">
                    <input type="password" placeholder="Password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="btn-container">
                <input type="submit" value="ログイン">
            </div>
        </form>
    </div>
</div>
@endsection