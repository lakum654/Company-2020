@extends('layouts.app')
@section('content')
<div class="container bg-white w-50">
    <h3 class="p-3 text-center">REGISTER</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="form-control">
            @error('name')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control">
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
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">          
        </div>

        <div class="form-group">
            <input type="submit" value="Register" class="btn btn-block btn-success">
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('login'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already Registered ?') }}
            </a>
            @endif
        </div>
    </form>
    
</div>
@endsection
