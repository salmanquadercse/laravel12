@extends('layouts.auth-main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
    </div>
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>
    <form method="POST" action="{{ route('login') }}" class="pt-3">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Username">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control form-control-lg" id="password"
                placeholder="Password">
        </div>
        <div class="mt-3 d-grid gap-2">
          <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN"/>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input name="remember" type="checkbox" class="form-check-input"> Keep me signed in </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
        <div class="mb-2 d-grid gap-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                <i class="ti-facebook me-2"></i>Connect using facebook </button>
        </div>
        <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
        </div>
    </form>
</div>
@endsection
