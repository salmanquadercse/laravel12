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
    <h4>New here?</h4>
    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
    <form class="pt-3" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Username">
            @error('name')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
            <div class="form-text text-muted">Make sure your password is at least 8 characters long.</div>
            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Password">
            <div class="form-text text-muted">Make sure your password is at least 8 characters long.</div>
            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" name="is_aggreed"> I agree to all Terms & Conditions </label>
            </div>
        </div>
        <div class="mt-3 d-grid gap-2">
            <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP"/>
        </div>
        <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
        </div>
    </form>
</div>
@endsection