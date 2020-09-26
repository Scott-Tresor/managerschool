@extends('layouts.base')

@section('contenue')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4>{{ __('Register') }}</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control form-control-md @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus placeholder="{{ __('Name') }}">
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control form-control-md @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
                            </div>
                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control form-control-md @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control form-control-md @error('password') is-invalid @enderror"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="{{ __('Confirm Password') }}">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
