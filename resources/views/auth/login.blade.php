@extends('layouts.app-create')
@section('title', 'Login- eatee')
@section('content')

                <div class="page-header">
                    <!-- <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div> -->
                    <div class="container">
                        <div class="col-md-4 content-center">
                            <div class="card card-login card-plain">
                                <form class="form" method="Post">
                                    @csrf

                                    <div class="header header-primary text-center">
                                        <div class="logo-container" style="height: 100px; width: 100px;">
                                            <img src="assets/img/Vertcoin.svg.png" alt="">
                                        </div>
                                    </div>
                                    <h6 class="font-weight-normal text-dark pb-4">W<span class="text-lowercase">elcome Back, Sign in to Continue</span>
                                    </h6>
                                    <div class="content">
                                        <div class="input-group form-group-no-border input-lg">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons users_circle-08 text-dark"></i>
                                            </span>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                        </div>
                                        <div class="input-group form-group-no-border input-lg">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_lock-circle-open text-dark"></i>
                                            </span>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="pull-left mt-3">
                                            <div class="checkbox text-nature">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit"  class="btn btn-nature w-150">Login</button>
                                        </div>
                                        {{-- <div class="pb-4"></div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-google full-width">
                                                <i class="fa fa-google-plus left"></i> Sign up with Google+
                                            </button>
                                            <button type="button" class="btn btn-facebook full-width" onclick="fbLogin()">
                                                <i class="fa fa-facebook-square left"></i> Sign up with Facebook
                                            </button>
                                        </div> --}}

                                    </div>
                                </form>
                                <p class="text-center display-5 text-dark">Forgot Password ?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="status"></div>
    <div id="userData"></div>
@endsection