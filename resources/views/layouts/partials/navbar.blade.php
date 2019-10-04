<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top" >
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
                {{-- @if(!auth()) --}}
                <li class="nav-item">
                    <a class="nav-link btn btn-nature" href="/register">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>Get Started</p>
                    </a>
                </li>
                {{-- @endif --}}
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
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->