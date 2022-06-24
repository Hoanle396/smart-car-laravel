@extends('layouts.client')
@section('title', 'News Page')
@section('content')
@php
$name='name_'.app()->getlocale();
@endphp
<div class="position-relative flex justify-center items-center " style="margin-top: -10px;">
    <img src="{{asset('public/images/istockphoto-1157655660-612x612.jpg')}}" class="w-100 img-fluid object-fit-cover">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">{{__('lang.tintuc')}}</b>
    </div>
</div>
<div class="bg-white" style="min-height: calc((100vh - 11.05rem) - 8rem);">
    <div class="bg-white">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs pb-5" id="myTab" role="tablist">
                                <li class="title" style="font-size: 30px;">{{__('lang.tintuc')}}</li>
                            </ul>

                            @foreach($news as $new)

                            <div class="col-12 d-flex border border-1 border-secondary rounded shadow mt-1">
                                <div class="col-4">
                                    <a href="{{URL::to('new/'.$new->id)}}">
                                        <img width="150" height="100" src="{{asset($new->images)}}" alt="{{$new->$name}}" class="object-fit-cover" data-was-processed="true">
                                    </a>
                                </div>
                                <div class="col-8 ">
                                    <a href="{{URL::to('new/'.$new->id)}}" class="text-decoration-none ">
                                        <h5 class="text-black text-uppercase">{{substr($new->$name,0,100)}}</h5>
                                    </a>
                                    <span>{{date_format($new->updated_at,'Y/m/d H:i')}}</span>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 justify-content-right">
                    <div class="row">
                        <div class="col-12">
                            {{$news->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
