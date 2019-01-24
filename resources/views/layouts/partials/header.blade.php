<!-- Header -->

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                        <div class="logo"><a href="/">Travello</a></div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li class="@if(URL::current() == URL::to('/')) active @endif"><a href="/">Home</a></li>
                                <li class="@if(URL::current() == URL::to('/about')) active @endif"><a href="/about">About us</a></li>
                                <li class="@if(URL::current() == URL::to('/services')) active @endif"><a href="/services">Services</a></li>
                                <li class="@if(URL::current() == URL::to('/news')) active @endif"><a href="/news">News</a></li>
                                <li class="@if(URL::current() == URL::to('/contact')) active @endif"><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header_phone ml-auto">Call us: 00-56 445 678 33</div>

                        <!-- Hamburger -->

                        <div class="hamburger ml-auto">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_social d-flex flex-row align-items-center justify-content-start">
        <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</header>
