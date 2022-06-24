@extends('layouts.client')
@section('meta')
@php
$name='name_'.app()->getlocale();
$description='description_'.app()->getlocale();
@endphp
<meta name="description" content="{{$car->$name}}" />
<meta name="keywords" content="{{$car->$name}}" />
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
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <!--End Controls-->
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach (json_decode($car->images) as $img)
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{asset($img)}}" alt="{{$img}}">
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    @foreach (json_decode($car->images) as $img)
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{asset($img)}}" alt="{{$img}}">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--/.Second slide-->

                        </div>
                        <!--End Slides-->
                    </div>
                    <!--End Carousel Wrapper-->
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-dark fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--End Controls-->
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
<script>
    /*

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

*/

    'use strict';
    $(document).ready(function() {



        // Product detail
        $('.product-links-wap a').click(function() {
            var this_src = $(this).children('img').attr('src');
            $('#product-detail').attr('src', this_src);
            return false;
        });

    });
</script>
@endsection
