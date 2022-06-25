@extends('layouts.client')
@section('meta')
@php
$name='name_'.app()->getlocale();
$description='description_'.app()->getlocale();
@endphp
<meta name="description" content="{{$car->$name}}" />
<meta name="keywords" content="{{$car->$name}}" />
<link rel="stylesheet" href="{{asset('public/owlcarousel/dist/assets/owl.carousel.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('public/owlcarousel/dist/assets/owl.theme.default.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
@section('title','Detail')
@section('content')
@php
$hotline=DB::table('settings')->where('name','hotline')->select('value')->first();
@endphp
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{asset(json_decode($car->images)[0])}}" alt="Card image cap" id="product-detail">
                </div>
                <div class="row">
                    <div id="owl-carousel" class="owl-carousel owl-theme " >
                                    @foreach (json_decode($car->images) as $img)
                                    <div class="item product-links-wap border bolder-1 mx-1">
                                        <a href="#">
                                            <img class="img-fluid object-fit-cover"  src="{{asset($img)}}" alt="{{$img}}">
                                        </a>
                                    </div>
                                    @endforeach
                    </div>
                    
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fs-1">{{$car->$name}}</h1>
                        <div class="d-flex ">
                            <span class="text-muted"><i class="fa-solid fa-gauge"></i> : {{$car->kilomet}} KM</span>
                            <span class="text-muted px-5"><i class="fa-solid fa-calendar-days"></i> : {{$car->manufacture}}</span>
                        </div>
                        <p>{!!$car->$description!!}</p>
                        <div class="row py-3">
                            <div class="col d-grid">
                                <a type="button" class="btn btn-primary btn-lg" href="tel:{{$hotline->value}}"><i class="fa fa-phone mx-2"></i>{{$hotline->value}}</a>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->




@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{ asset('public/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script>

    'use strict';
    $(document).ready(function() {
        $("#owl-carousel").owlCarousel({
            loop: false,
            items: 5,
            margin:0,
        });


        // Product detail
        $('.product-links-wap a').click(function() {
            var this_src = $(this).children('img').attr('src');
            $('#product-detail').attr('src', this_src);
            return false;
        });

    });
</script>
@endsection
