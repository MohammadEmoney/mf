@extends('layouts.auth')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div id="add-listing">
            <div class="tabs-container alt">
                <div class="tab-content">

                    <form method="POST" class="ورود" action="{{ route('login') }}">
                        @csrf
                        <p class="form-row form-row-wide">
                            <label for="email">ایمیل:
                                <i class="im im-icon-Male"></i>
                                <input type="email" class="input-text @error('email') is-invalid @enderror"" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="password">رمز عبور:
                                <i class="im im-icon-Lock-2"></i>
                                <input class="input-text @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                            @if (Route::has('password.request'))
                                <span class="lost_password">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        فراموشی رمز عبور؟
                                    </a>
                                </span>
                            @endif

                        </p>

                        <div class="form-row">
                            <div class="checkboxes margin-top-10">
                                <input id="remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember-me">مرا به خاطر داشته باش</label>
                            </div>
                            <input type="submit" class="button border margin-top-5" name="login" value="ورود">
                        </div>

                    </form>

                    <!-- Title -->
                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>ایمیل</h5>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form> --}}
                    <!-- Row / End -->
                </div>
            </div>

            <!-- Section -->

            <!-- Section / End -->

        </div>
    </div>
</div>
@endsection
