@extends('layouts.client')
@section('title', 'Homepage')
@section('meta')
@php
$mota=DB::table('settings')->where('name','mota')->select('value')->first();
$tukhoa=DB::table('settings')->where('name','tukhoa')->select('value')->first();
@endphp
<meta name="description" content="{{$mota->value}}" />
<meta name="keywords" content="{{$tukhoa->value}}" />
<link rel="stylesheet" href="{{asset('public/owlcarousel/dist/assets/owl.carousel.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('public/owlcarousel/dist/assets/owl.theme.default.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
@section('content')
@php
$name='name_'.app()->getlocale();
$description='description_'.app()->getlocale();
@endphp
<section class="border shadow">
    <div class="container-fluid">
        <div class="row top-sliders">
            <div class="col-md-8">
                <div id="owl-carousel" class="owl-carousel owl-theme">
                    @foreach($banners as $banner)
                    <div class="item"><img class="img-fluid img-banner object-fit-cover" src="{{asset($banner->images)}}" /></div>
                    @endforeach
                </div>
            </div>
            <div class="left-owl pt-2 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    @foreach($news as $new)
                    <div class="col-12 mt-1 d-flex border rounded shadow">
                        <div class="col-4">
                            <a href="{{URL::to('new/'.$new->id)}}">
                                <img width="100" height="70" src="{{asset($new->images)}}" alt="{{$new->$name}}" class="" data-was-processed="true">
                            </a>
                        </div>
                        <div class="col-8 ">
                            <a href="{{URL::to('new/'.$new->id)}}" class="text-decoration-none ">
                                <h5 class="text-black text-uppercase fs-6">{{substr($new->$name,0,25)}}</h5>
                            </a>
                            <span>{{date_format($new->updated_at,'Y/m/d H:i')}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section id="logo" class="pt-5">
    <div class="container">
        <h5 class="text-uppercase fs-5 pb-3">{{ __('lang.hangxe') }}</h5>
        <div class="row d-flex border border-1">
            <div id="slide" class="owl-carousel owl-theme bg-white">
                @foreach($logos as $logo)
                <div class="item border border-1">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 doitacimg">
                        <a href="{{URL::to('car/'.$logo->name)}}" class="thumbnail ">
                            <img class="img-logo px-4 py-4" src="{{asset($logo->logo)}}">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <h5 class="text-uppercase fs-5 pb-3">{{ __('lang.xenoibat') }}</h5>
        <div id="item" class="row d-flex row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($cars as $car)
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class=" img-resize card-img-top" src="{{asset(json_decode($car->images)[0])}}" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">{{substr($car->$name, 0, 30)}}</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted "><i class="fa-solid fa-gauge"></i> : {{$car->kilomet}}</span>
                            <span class="text-muted "><i class="fa-solid fa-calendar-days"></i> : {{$car->manufacture}}</span>
                        </div>
                    </div>
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-primary mt-auto" href="{{URL::to('/car/detail/'.$car->id)}}">{{ __('lang.chitiet')}}</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="pt-5">
    <div class="container mb-5 pt-5">
        <h5 class="text-uppercase fs-5">{{ __('lang.tinnoibat') }}</h5>
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class=" mb-100">
                    <ul class="nav nav-tabs pb-2" id="myTab" role="tablist">
                        <li class="title" style="font-size: 30px;">{{$papper->$name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-auto mb-100">
            <div class=" border rounded shadow d-flex py-2 px-2 justify-content-center">
                {!!$papper->$description!!}
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{ asset('public/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-carousel").owlCarousel({
            loop: true,
            dots: false,
            items: 1,
            margin: 10,
            lazyLoad: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
        $("#slide").owlCarousel({
            center: true,
            items: 5,
            dots: false,
            loop: true,
            responsive: {
                600: {
                    items: 7
                },
                800: {
                    items: 10
                },
                900: {
                    items: 12
                }
            }
        });
    });
</script>
@endsection
