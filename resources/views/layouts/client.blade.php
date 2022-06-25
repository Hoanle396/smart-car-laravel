<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
$background=DB::table('settings')->where('name','background')->select('value')->first();
$navcolor=DB::table('settings')->where('name','navcolor')->select('value')->first();
$favicon=DB::table('settings')->where('name','favicon')->select('value')->first();
$gmail=DB::table('settings')->where('name','email')->select('value')->first();
$dieukhoan=DB::table('settings')->where('name','dieu_khoan')->select('value')->first();
$tenweb=DB::table('settings')->where('name','tenweb')->select('value')->first();
$zalo=DB::table('settings')->where('name','zalo')->select('value')->first();
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{$favicon->value}}">

    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $tenweb->value }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
</head>

<body class="body">
    <div id="container" style="background-color:{{$background->value}} !important;">
        <div class="header container py-1 " id="header-top">
            <div class="flex-container ">
                <div class="row d-flex justify-content-between align-center">
                    <div class="col-md-4 col-12 col-xs-4 d-inline-flex">
                        @php
                        $phone=DB::table('settings')->where('name','phone')->select('value')->first();
                        $facebook=DB::table('settings')->where('name','facebook')->select('value')->first();
                        $logo=DB::table('settings')->where('name','logo')->select('value')->first();
                        $youtube=DB::table('settings')->where('name','youtube')->select('value')->first();
                        @endphp
                        <a class="navbar-brand nav-link " type="button" href="tel:{{$phone->value}}"><i class="fas fa-phone fs-6"></i> <span class="fs-6">{{$phone->value}}</span></a>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="row mt-2 align-center justify-content-between">
                            <div class="col-lg-7 col-sm-7 col-12">

                                <form action="{{URL::to('car/search')}}" method="POST">
                                    @csrf
                                    <div class="form-outline d-flex">
                                        <input type="hidden" name="hang" value="all">
                                        <input type="text" name="tukhoa" class="form-control-md border-0 rounded-pill" placeholder="{{__('lang.search')}}" aria-label="Search" />
                                        <label for="search"><button type="submit" class=" border-0"><i class="fas fa-search mt-1"></i></button></label>

                                    </div>
                            </div>
                            </form>
                            <div class="col-lg-4 col-sm-4 col-4 d-flex align-center justify-content-between">
                                <a href="{{$facebook->value}}"><i class="p-0 fa-brands text-primary fa-facebook"></i></a>
                                <a href="#"><i class="p-0 fa-brands text-black fa-tiktok"></i></a>
                                <a href="{{$youtube->value}}"><i class="p-0 fa-brands text-danger fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="mainnav" style="background-color: {{ $navcolor->value}} !important;" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top bg-primary border-top-1 border-bottom-1 border-secondary shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img img-responsive img-fluid" width="60" src="{{ $logo->value }}" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5 ms-auto mb-2 mb-lg-0">
                        @php
                        $menu1=DB::table('car_brands')->get();
                        $menu2=DB::table('services_brands')->get();
                        @endphp
                        <li class="nav-item">
                            <a class="nav-link  text-uppercase " href="{{ URL::to('/') }}">{{ __('lang.home') }}</a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-uppercase" href="{{ URL::to('/car-all') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('lang.xedangco') }}
                            </a>
                            <ul class="dropdown-menu w-25" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-uppercase" href="{{ URL::to('/car-all')}}">{{__('lang.xedangco') }}</a></li>
                                @foreach ($menu1 as $submenu1)
                                <li><a class="dropdown-item text-uppercase" href="{{URL::to('car/'.$submenu1->name)}}">{{$submenu1->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle text-uppercase" href="{{ URL::to('/news') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('lang.dichvu') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($menu2 as $submenu2)
                                @php
                                $subnav='name_'.app()->getlocale();
                                @endphp
                                <li>
                                    <a class="dropdown-item text-uppercase" href="{{URL::to('service/'.$submenu2->name_en)}}">{{$submenu2->$subnav}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link  text-uppercase" href="{{ URL::to('/feed-back')}}" id="navbarDropdown">
                                {{ __('lang.lienhe') }}
                            </a>

                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link text-uppercase" href="{{ URL::to('/news') }}">
                                {{ __('lang.tintuc') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle text-uppercase" href="{{ URL::to('/contact') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('lang.ngonngu') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/vi')}}"><img src="{{asset('public/images//vietnam.png')}}" width="40"  alt="VI" class="pe-2"/>Tiếng Việt</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/en')}}"><img src="{{asset('public/images//england.png')}}" width="40"  alt="EN" class="pe-2"/>English</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/jp')}}"><img src="{{asset('public/images//japan.png')}}" width="40"  alt="JP" class="pe-2"/>日本</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/ko')}}"><img src="{{asset('public/images//korea.png')}}" width="40"  alt="KO" class="pe-2"/>한국</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/cn')}}"><img src="{{asset('public/images//china.png')}}" width="40"  alt="CN" class="pe-2"/>中国</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/lang/pt')}}"><img src="{{asset('public/images//portugal.png')}}" width="40"  alt="PT" class="pe-2"/>Portugal</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <main id="app" >
            @yield('content')
        </main>

        <footer class="text-center text-white" style="background-color:{{$navcolor->value}} !important;">
            <!-- Grid container -->
            <div class="container p-4">

                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="{{$facebook->value}}" role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="mailto:{{$gmail->value}}" role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="{{$youtube->value}}" role="button"><i class="fab fa-youtube"></i></a>
                </section>
                <!-- Section: Social media -->
                <!-- Section: Form -->
                <section class="">
                    <form action="">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Sign up for our newsletter</strong>
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-5 col-12">
                                <!-- Email input -->
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-auto">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-lg text-uppercase bg-warning mb-4">
                                    Subscribe
                                </button>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </form>
                </section>
                <!-- Section: Form -->

                <!-- Section: Text -->
                <section class="mb-4">
                    <p>
                        {{$dieukhoan->value}}
                    </p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <div class="contaiter">
                                <div class="row d-flex justify-content-center align-center">
                                    <img src="{{$logo->value}}" alt="{{$logo->value}}" class="img-logo img-fluid object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Page</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{url('car-all')}}" class="text-white">Product</a>
                                </li>
                                <li>
                                    <a href="{{url('feed-back')}}" class="text-white">Contact</a>
                                </li>
                                <li>
                                    <a href="{{url('news')}}" class="text-white">News Page</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Contact</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="tel:{{$phone->value}}" class="text-white">{{$phone->value}}</a>
                                </li>
                                <li>
                                    <a href="mailto:{{$gmail->value}}" class="text-white">{{$gmail->value}}</a>
                                </li>
                                <li>
                                    <a href="{{$facebook->value}}" class="text-white">Facebook</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{$facebook->value}}" class="text-white"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{$gmail->value}}" class="text-white"><i class="fa fa-mail-forward" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{$youtube->value}}" class="text-white"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © @php echo date('Y'); @endphp Copyright:
                <a class="text-white" href="{{ url('/')}}">{{$tenweb->value}}</a>
            </div>
            <!-- Copyright -->
        </footer>

        <section>
            <div class="container-fluid position-fixed fixed-bottom">
                <div class="d-flex justify-content-between ">
                    <a href="https://zalo.me/{{$zalo->value}}"><img src="{{asset('public/images/icon-zalo.png')}}" width="70" height="70" alt=""></a>
                    <button id="top-btn" class=" my-3 btn border-0 btn-warning"><i class="fa-solid fa-angles-up"></i></button>
                </div>
            </div>
        </section>


        <script src="{{ asset('public/js/app.js')}}"></script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script>
        let topBtn = document.querySelector("#top-btn");

        // On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
        topBtn.onclick = () => window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

        // On scroll, Show/Hide the btn with animation
        window.onscroll = () => window.scrollY > 500 ? topBtn.style.opacity = 1 : topBtn.style.opacity = 0
    </script>
    @yield('js')
</body>

</html>
