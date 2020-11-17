@extends('layouts.app')

@section('content')
<div class="container bg-white w-50">
<h3 class="p-3 text-center">OTP VERIFY</h3>
<form action="{{ route('otp-verify') }}" method="POST">
	@csrf
<input type="text" name="otp" placeholder="Enter OTP" class="form-control"><br>
<input type="submit" value="Verify OTP" class="btn btn-block btn-success">
</form><br>
@if(Session::has('message'))
<div class="alert alert-danger">
	{{ Session::get('message') }}
</div>
@endif
<br>
</div>
@endsection
