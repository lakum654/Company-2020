@extends('layouts.app')
@section('content')
<div class="container bg-white w-50">
    <h3 class="p-3 text-center">LOGIN</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
            @error('email')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
            @error('password')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="form-group">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn btn-block btn-success">
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('forgotpass'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('forgetpass') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
    </form>
    @if(Session::has('message'))
    <div class="alert bg-danger">
        {{ Session()->get('message') }}
    </div>
    @endif
</div>
@endsection