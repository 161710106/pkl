<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Balay Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assett/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('assett/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assett/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assett/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assett/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assett/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assett/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('assett/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('assett/js/respond.min.js')}}"></script>
    <![endif]-->

    </head>
    <body>
    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <h1 id="colorlib-logo"><a href="index.html">Balay</a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><a href="{{url('/home')}}}">Home</a></li>
                    <li><a href="{{url('pakett')}}">Paket Umroh</a></li>
                    <li><a href="{{url('aboutt')}}">About</a></li>
                    <li><a href="services.html">Artikel</a></li>
                    <li><a href="blog.html">Berita</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer">
                <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a></span></small></p>
                <ul>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>

        </aside>

        <div id="colorlib-main">

            <div class="colorlib-blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="row">
       <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Paket</h1>
        </div>
    </div>

    @foreach ($paket as $data)
    @if($data->status == 0)
    @else
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $data->jenis_paket }}</h2>
            <h2>{{ $fasilitas->bus }}</h2>
            <h2>{{ $fasilitas->pesawat }}</h2>
            <h2>{{ $fasilitas->hotel }}</h2>
            <h2>{{ $pembina->nama }}</h2>
            <h2>{{ $syarat->termasuk }}</h2>
            <h2>{{ $syarat->tidak_termasuk }}</h2>
            <h2>{{ $syarat->persyaratan }}</h2>
            <h2>{{ $syarat->dp }}</h2>
            <p>{!! str_limit($data->konten,1000) !!}</p>

          
            <hr>
        </div>
    </div>
    @endif
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $paket->links() !!}
            </div>
        </div>
    </div>

        </div>
    </div>

                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>

            <div id="get-in-touch" class="colorlib-bg-color">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <h2>Get in Touch!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assett/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assett/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assett/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assett/js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('assett/js/jquery.flexslider-min.js')}}"></script>
    <!-- Sticky Kit -->
    <script src="{{asset('assett/js/sticky-kit.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('assett/js/owl.carousel.min.js')}}"></script>
    <!-- Counters -->
    <script src="{{asset('assett/js/jquery.countTo.js')}}"></script>
    
    
    <!-- MAIN JS -->
    <script src="{{asset('assett/js/main.js')}}"></script>

    </body>
</html>

