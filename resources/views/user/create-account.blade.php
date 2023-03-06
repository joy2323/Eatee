@extends('layouts.app-create')
@section('title', 'Create Account - Maelumdeli.com')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="Post" id="signin-form" action="{{ route('register') }}">
                    @csrf

                    <div class="header header-primary text-center">
                        <div class="logo-container" style="height: 100px; width: 100px;">
                            <img src="/img/Vertcoin.svg.png" alt="">
                        </div>
                    </div>
                    <!-- <h6 class="font-weight-normal text-dark pb-4">W<span class="text-lowercase">elcome Back, Sign in to Continue</span>
                    </h6> -->
                    <div class="content">
                    <div class="input-group form-group-no-border input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08 text-dark"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="Name e.g John Doe" required autocomplete="off">
                    </div>
                        <div class="input-group form-group-no-border input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08 text-dark"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Email" required autocomplete="off">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08 text-dark"></i>
                            </span>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required autocomplete="off">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_lock-circle-open text-dark"></i>
                            </span>
                            <input type="password" name="password" placeholder="Password" class="form-control" required/>

                        </div>
                        <input type="hidden" name="action" value="register" />
                    </div>
                    <div class="footer">
                        <!-- <div class="pull-left mt-3">
                            <div class="checkbox text-nature">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Remember me
                                </label>
                            </div>
                        </div> -->
                        <div class="pull-right">
                            <button type="submit" id="submit-btn" class="btn btn-nature w-150">Create account</button>
                        </div>
                        {{-- <div class="pb-4"></div>
                        <div class="form-group">
                            <button type="button" class="btn btn-google full-width">
                                <i class="fa fa-google-plus left"></i> Sign up with Google+
                            </button>
                            <button type="button" class="btn btn-facebook full-width" >
                                <i class="fa fa-facebook-square left"></i> Sign up with Facebook
                            </button>
                        </div> --}}

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</body>



@endsection