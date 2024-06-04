@extends('auth.layouts.app', ['page' => 'Login'])

@section('content')
    <div class="mini-logo text-center my-4">
        <img src="{{ asset('assets/img/app/favicon-white.png') }}" alt="" class="w-25 rounded-circle shadow">
        <h4 class="card-title mt-4">Sign in to <b>{{ config('app.name') }}</b></h4>
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
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" required
                        value="{{ ($errors->has('username')) ? implode('', $errors->get('username')) : null }}">
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                </div>
                {{-- <div class="col-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                    </div>
                </div> --}}
                {{-- <div class="col-6 text-end">
                    <a href="reset.html">Forgot Password?</a>
                </div> --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" id="btn_submit">
                        Sign in
                    </button>
                </div>
            </form>
            <p class="mt-3 mb-0">
                Don't have an account?
                <a class="text-primary" href="{{ route('register') }}">Sign up</a>
            </p>
        </div>
    </div>
    {{-- <div class="privacy-link">
        <a href="signup.html">Have an issue with 2-factor authentication?</a>
        <br />
        <a href="signup.html">Privacy Policy</a>
    </div> --}}
@endsection

@push('custom-scripts')
    <script>
        $('.signin_validate').submit(function () {
            btnSubmitSpinner();
        });
    </script>
@endpush