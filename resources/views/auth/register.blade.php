@extends('auth.layouts.app')

@push('custom-styles')
    <style>
        .section-padding {
            padding: 50px 0;
        }
    </style>
@endpush

@section('content')
    <div class="mini-logo text-center my-4">
        <img src="{{ asset('assets/img/app/favicon-white.png') }}" alt="" class="w-25 rounded-circle shadow">
        <h4 class="card-title mt-4">Sign Up to <b>{{ config('app.name') }}</b></h4>
    </div>
    <div class="auth-form card">
        <div class="card-body">
            <form class="signin_validate row g-3" method="POST" action="{{ route('login') }}">
                @error('user') 
                    <div class="col-12">
                        <div class="alert alert-danger mb-1 text-center">{{ implode('', $errors->get('user')) }} </div>
                    </div>
                @enderror
                @csrf
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="col-12">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" id="btn_submit">
                        Sign in
                    </button>
                </div>
            </form>
            <p class="mt-3 mb-0">
                Already have an account?
                <a class="text-primary" href="{{ route('login') }}">Sign in</a>
            </p>
        </div>
    </div>
@endsection