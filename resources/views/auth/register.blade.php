@extends('auth.layouts.app', ['page' => 'Register'])

@push('custom-styles')
    <style>
        .section-padding {
            padding: 30px 0;
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
            <form class="signup_validate row g-3" method="POST" action="{{ route('register') }}">
                @error('user') 
                    <div class="col-12">
                        <div class="alert alert-danger mb-1 text-center">{{ implode('', $errors->get('user')) }} </div>
                    </div>
                @enderror
                @if ($errors->any())
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @csrf
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                </div>
                <div class="col-12">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" placeholder="Password" name="password" minlength="8" id="password" required>
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" id="password_confirmation" required>
                    <div class="text-danger small" id="password_confirmation_error" style="display: none">Password Confirmation not match.</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" id="btn_submit">
                        Sign up
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

@push('custom-scripts')
    <script>
        function handlingErrorPassword() {
            if ($('#password').val() !== $('#password_confirmation').val()) {
                $('#password_confirmation').addClass('border border-danger');
                $('#password_confirmation_error').slideDown();
            } else {
                $('#password_confirmation').removeClass('border border-danger');
                $('#password_confirmation_error').slideUp();
            }
        }

        function clearErrorPassword() {
            if ($('#password').val().length === 0 && $('#password_confirmation').val().length === 0) {
                $('#password_confirmation').removeClass('border border-danger');
                $('#password_confirmation_error').slideUp();
            }
        }

        $('#password').on('keyup change', function () {
            if ($('#password_confirmation').val().length !== 0) {
                handlingErrorPassword();
            }
            clearErrorPassword();
        });
        $('#password_confirmation').on('keyup change', function () {
            if ($('#password').val().length !== 0) {
                handlingErrorPassword();
            }
            clearErrorPassword();
        });

        $('.signup_validate').submit(function (e) {
            btnSubmitSpinner();
            if ($('#password').val() != $('#password_confirmation').val()) { e.preventDefault(); $('#btn_submit').html('Sign Up') }
        });
    </script>
@endpush