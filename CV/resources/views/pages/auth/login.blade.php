@extends('layouts.master')
@section('content')
class="main-wrapper">
        <div class="account-content">
            {{-- <a href="{{ route('dahboard') }}" class="btn btn-primary apply-btn">Bienvenue</a> --}}
            <div class="container">
                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="dashboard"><img src="{{ URL::to('assets/img/logo2.png') }}" alt="BDO"></a>
                </div>
                {{-- message --}}
               {{--  {!! Toastr::message() !!} --}}
                <!-- /Account Logo -->
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Se connecter </h3>
                        <p class="account-subtitle">Accès à notre tableau de bord</p>
                        <!-- Account Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control @error('email') is-invalid 
                                @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <input type="password" class="form-control @error('password')
                                 is-invalid @enderror" name="password" placeholder="Enter Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label></label>
                                    </div>
                                    <div class="col-auto">
                                        {{-- <a class="text-muted" href="{{ route('forget-password') }}"> --}}
                                            Mot de Passe oublié?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Connecter</button>
                            </div>
                            <div class="account-footer">
                                <p>Vous n'avez pas encore de compte ? <a href="{{-- {{ route('register') }} --}}">s'inascrire</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection