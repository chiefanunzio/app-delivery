 @extends('layouts.main-layout')

@section('content')

<main id="login">
    <section>
         <form method="POST" action="{{ route('login') }}">
              @csrf
                <fieldset>
                    <legend>Login</legend>
                    <div>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input class="email" id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="password">{{ __('Password') }}</label>
                        <input  class="password" id="password" type="password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="checkbox-box">
                        <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="checkbox-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div>
                        <button type="submit">
                            {{ __('Login') }}
                        </button>
                   </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('easterEgg') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
              </fieldset>  
          </form>
    </section>
</main>
                
@endsection
