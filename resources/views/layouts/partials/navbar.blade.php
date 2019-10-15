<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top" >
    @guest
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                Welcome  
                {{-- <a href="#"><i class="fa fa-circle text-success"></i> <b> </b></a> --}}
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
       
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/public/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn btn-nature" href="/login">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>Get Started</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-nature" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
    @else
                <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
    
                
            </ul>
        </div>
    </div>
    @endguest
</nav>
<!-- End Navbar -->