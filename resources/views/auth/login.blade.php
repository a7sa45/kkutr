@extends('layouts.app')

@section('content')
<style>
    html,


body {
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <img class="mb-4" src="{{ asset('images/kkutr.svg') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">تسجيل الدخول</h1>
  
      <div class="form-floating">
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
        <label for="floatingInput">البريد الالكتروني</label>
      </div>
      <div class="form-floating">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        <label for="floatingPassword">الرمز</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" style="background-color: rgb(8, 82, 105)" type="submit">دخول</button>
      <p class="mt-5 mb-3 text-muted">
        @if (Route::has('password.request'))
            <a  href="{{ route('register') }}">
                ليس لديك حساب ؟ تسجيل
            </a>
        @endif
      </p>
    </form>
  </main>
@endsection
