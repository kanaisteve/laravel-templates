@extends('layouts.auth');

@section('content')
<div class="pt-4-1 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
    <p class="text-center small">We want to know you better. Please provide us some information about your business.</p>
</div>

<form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}" novalidate>
  @csrf
  <div class="col-12">
    <label for="yourName" class="form-label">{{ __('What is your business name') }}</label>
    <input type="text" class="form-control shadow-none @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="col-12">
    <label for="email" class="form-label">{{ __('What is your business Email') }}</label>
    <input type="email" name="email" id="email" class="form-control shadow-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="col-12">
    <label for="yourPassword" class="form-label">{{ __('Create Password') }}Create Password</label>
    <input type="password" id="password" name="password" class="form-control shadow-none @error('password') is-invalid @enderror" required autocomplete="new-password">
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
                      
  <div class="col-12">
    <label for="yourPassword" class="form-label">{{ __('Confirm Password') }}</label>
    <input type="password" id="password-confirm" name="password_confirmation" class="form-control shadow-none" required autocomplete="new-password">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">
      {{ __('Create Account') }}
    </button>
  </div>

  <div class="col-12">
    <p class="small mb-0 text-center">Already have an account? <a href="{{ url('/login') }}">Log in</a></p>
  </div>
</form>
@endsection