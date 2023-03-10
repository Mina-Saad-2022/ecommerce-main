@extends('layouts.app')

@section('registration')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        {{-- input name--}}
        <div class="input-group w-100">
            <label for="name" class="col-md-3 text-center float-left col-form-label text-md-end">{{ __('Name') }} :
                &nbsp </label>
            <div class="col-md-9">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        {{-- input email--}}
        <div class="input-group w-100">
            <label for="email" class="col-md-3 text-center float-left col-form-label text-md-end">{{ __('Email') }} :
                &nbsp</label>
            <div class="col-md-9">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        {{-- input phone--}}
        <div class="input-group w-100">
            <label for="phone" class="col-md-3 text-center float-left col-form-label text-md-end">{{ __('Phone') }} :
                &nbsp</label>
            <div class="col-md-9">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                       value="{{ old('phone') }}" required autocomplete="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        {{-- input address--}}
        <div class="input-group w-100">
            <label for="address" class="col-md-3 text-center float-left col-form-label text-md-end">{{ __('Address') }}
                :
                &nbsp</label>
            <div class="col-md-9">
                <input id="address" type="text" class="form-control" name="address"
                       value="{{ old('address') }}" required autocomplete="address">

            </div>
        </div>
        {{-- input password--}}
        <div class="input-group w-100">
            <label for="password" class="col-md-3 float-left col-form-label text-md-end">{{ __('Password') }} :
                &nbsp</label>
            <div class="col-md-9">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        {{--confirm password--}}
        <div class="input-group w-100">
            <label for="password-confirm" class="col-md-3 float-left col-form-label text-md-end">{{ __('Confirm PS') }}
                : &nbsp</label>

            <div class="col-md-9">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                       autocomplete="new-password">
            </div>
        </div>

        <button>
            Sign up
        </button>
        <p>
							<span>
								Already have an account?
							</span>
            <b onclick="toggle()" class="pointer">
                Sign in here
            </b>
        </p>

    </form>
@endsection

@section('login')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- input login email --}}
        <div class="input-group">
            <label for="email" class="col-md-3 text-bold ">{{ __('Email Address') }} : &nbsp</label>
            <input id="email" type="email" class="col-md-8 form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>

        {{-- input login password --}}
        <div class="input-group">
            <label for="password" class="col-md-3  text-bold">{{ __('Password') }} : &nbsp</label>
            <input id="password" type="password"
                   class="col-md-8 form-control @error('password') is-invalid @enderror" name="password" required
                   autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>


    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    <button>
        Sign in
    </button>
    </form>
     <p>
							<span>
								Don't have an account?
							</span>
        <b onclick="toggle()" class="pointer">
            Sign up here
        </b>
    </p>
@endsection

@section('text_login_registration')
    <div class="col align-items-center flex-col">
        <div class="text sign-in">
            <h2>
                Welcome
            </h2>

        </div>
    </div>

    <div class="col align-items-center flex-col">
        <div class="text sign-up">
            <h2>
                Join with us
            </h2>

        </div>
    </div>
@endsection
