@extends('layouts.auth');

@section('content')
<div class="pt-4-1 pb-2">
  <h5 class="card-title text-center pb-0 fs-4">{{ __('Login Into Your Business Account') }}</h5>
  <p class="text-center small">Enter your username & password to login</p>
</div>

<form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}" novalidate>
  @csrf
  <div class="col-12">
    <label for="name" class="form-label">{{ __('Username') }}</label>
    <input type="text" name="email" class="form-control shadow-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="email" required autofocus autocomplete="name">
    @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="col-12">
    <label for="password" class="form-label">{{ __('Password') }}</label>
    <input type="password" id="password" name="password" class="form-control shadow-none @error('password') is-invalid @enderror" placeholder="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input shadow-none" type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}" id="remember">
      <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
    </div>
  </div>

  <div class="col-12 text-center">
    <button class="btn theme-btn w-50 shadow-none" type="submit">
      {{ __('Login') }}
    </button>

    @if (Route::has('password.request'))
      <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
      </a>
    @endif
  </div>

  <div class="col-12 text-center">
    <p class="small mb-0">Don't have account? <a href="{{ url('/register') }}">Create an account</a></p>
  </div>
</form>
@endsection