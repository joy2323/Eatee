@extends('layouts.app-create')
@section('title', 'Create Account - Eat Rit')

@section('content')

<div class="page-header">
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="header header-primary text-center">
                                    <div class="logo-container" style="height: 100px; width: 100px;">
                                        <img src="/img/Vertcoin.svg.png" alt="">
                                    </div>
                                </div>

                                <div class="content">
                                <div class="input-group form-group-no-border input-lg">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08 text-dark"></i>
                                        </span>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name e.g John Doe" value="{{ old('name') }}" required autocomplete="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="input-group form-group-no-border input-lg">
                                    <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08 text-dark"></i>
                                    </span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-group form-group-no-border input-lg" style="margin-bottom: 10px !important;">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08 text-dark"></i>
                                        </span>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required autocomplete="off">
                                    </div>
                                </div>

                                <div class="input-group form-group-no-border input-lg">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open text-dark"></i>
                                        </span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" name="password" placeholder="Password" required autocomplete="new-password">
                                        {{-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                </div>
                            
                            </div>
                            <div class="footer" style="margin-top:-4rem !important; margin-right:8rem !important;">

                                <div class="pull-right" >
                                    <button type="submit" class="btn btn-nature w-150">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            {{-- </div> --}}
                                
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
