@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="register-container">
    <div class="main-ttl">
        Registration
    </div>
    <div class="register-form">
        <form action="/register" method="post">
            @csrf
            <div class="register-input">
                <div class="input-container">
                    <img src="images/person.svg" width="26" height="26">
                    <input type=" text" placeholder="Username" name="name" value="{{ old('name') }}">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
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
                <input type="submit" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection