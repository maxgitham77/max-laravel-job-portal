@extends('frontend.layouts.master')

@section('content')
    <section class="pt-120 login-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                    <div class="login-register-cover">
                        <div class="text-center">
                            <h2 class="mb-5 text-brand-1">Register</h2>
                            <p class="font-sm text-muted mb-30">Don't have account yet? Create one!</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label" for="firstname">Firstname *</label>
                                        <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" id="firstname" value="{{ old('firstname') }}" type="text" required="" name="firstname"
                                               placeholder="Firstname">
                                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lastname">Lastname *</label>
                                        <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" id="lastname" type="text" value="{{ old('lastname') }}" required="" name="lastname"
                                               placeholder="Lastname">
                                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email *</label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" type="email" value="{{ old('email') }}" required="" name="email"
                                               placeholder="Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label" for="username">Username *</label>
                                        <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" type="text" value="{{ old('username') }}" required="" name="username"
                                               placeholder="Username">
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password *</label>
                                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" type="password" required="" name="password"
                                               placeholder="************">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password_confirmation">Confirm-Password *</label>
                                        <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" type="password" required="" name="password_confirmation"
                                               placeholder="************">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <hr>
                                    <h6 for="" class="mb-2">Create Account For</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="account_type" id="typeCandidate" value="candidate">
                                        <label class="form-check-label" for="typeCandidate">Candidate</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="account_type" id="typeCompany" value="company">
                                        <label class="form-check-label" for="typeCompany">Company</label>
                                    </div>

                                    @if($errors->has('account_type'))
                                        <div class="invalid-feedback d-block">
                                            {{ $errors->first('account_type') }}
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default hover-up w-100" type="submit" name="login">Submit &amp;
                                        Register</button>
                                </div>
                                <div class="text-muted text-center">Already have an account?
                                    <a href="{{ route('login') }}">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-100"></div>
@endsection
