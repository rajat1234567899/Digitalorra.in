@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f8f9fa;">
    <div style="width: 100%; max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; margin-bottom: 20px;">{{ __('Login') }}</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" style="font-weight: bold;">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
            @error('email')
                <p style="color: red; font-size: 14px;">{{ $message }}</p>
            @enderror

            <label for="password" style="font-weight: bold;">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required
                style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
            @error('password')
                <p style="color: red; font-size: 14px;">{{ $message }}</p>
            @enderror

            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                    style="margin-right: 5px;">
                <label for="remember">{{ __('Remember Me') }}</label>
            </div>

            <button type="submit" style="width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <p style="text-align: center; margin-top: 10px;">
                    <a href="{{ route('password.request') }}" style="color: #007bff; text-decoration: none;">{{ __('Forgot Your Password?') }}</a>
                </p>
            @endif
        </form>
    </div>
</div>
@endsection
