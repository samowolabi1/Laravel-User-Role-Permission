@extends('layouts.access')

@section('content')
@section('content')
    <div class="login-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Uncomment below for tenancy company name -->

            <div class="form-group m-b-15">
                <label for="name">{{ __('Full Name') }}</label>
                <input id="name" type="text" class="form-control input-lg" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group m-b-15">
                <label for="username" >{{ __('User Name') }}</label>
                <input id="username" type="text" class="form-control input-lg" placeholder="username" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group m-b-15">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control input-lg" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus />

                @if ($errors->has('email'))
                    <span class="text-danger" role=" alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group m-b-15">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control input-lg" placeholder="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group m-b-15">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
            </div>
            
            <!-- <div class="checkbox m-b-30">
                <label>
                    <input type="checkbox" /> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>.
                </label>
            </div> -->
            <div class="register-buttons">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
            <div class="m-t-20 m-b-40 p-b-40">
                Already a member? Click <a href="{{ route('login') }}">here</a> to login.
            </div>
            
            <hr />
            <p class="text-center text-inverse">
                &copy; Anonymous All Right Reserved 2019
            </p>
        </form>
    </div>
@endsection
