@extends('layouts.access')



@section('content')

    <div class="login-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
                <label for="password" >{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required />

                @if ($errors->has('password'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

            </div>
           <!--   <div class="form-group m-b-15">
                <label for="client" >{{ __('Business Name') }}</label>
                <input id="client" type="text" class="form-control input-lg" placeholder="Business Name" name="client" required />

                @if ($errors->has('client'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('client') }}</strong>
                    </span>
                @endif

            </div> -->
            <div class="checkbox m-b-30">
                <label>
                    <input type="checkbox" /> Remember Me
                </label>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">Sign in</button>
            </div>
            <div class="m-t-20 m-b-40 p-b-40">
                Not a member yet? Click <a href="{{ route('register') }}"  class="text-success">here</a> to Register.
            </div>

            <div class="">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <hr />
            <p class="text-center text-inverse">
                &copy; WAD TECHNOLOGIES All Right Reserved 2019
            </p>
        </form>
    </div>

@endsection