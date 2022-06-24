@extends('layouts.client')
@section('title', 'Service')
@section('content')
@php
$name='name_'.app()->getlocale();
@endphp
<div class="position-relative flex justify-center items-center " style="margin-top:-10px;">
    <img src="{{asset($banner->images)}}" class="w-100  object-fit-cover" height="500">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">{{__('lang.service')}}</b>
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
                                <li class="title" style="font-size: 30px;">{{__('lang.service')}}</li>
                            </ul>

                            @foreach($services as $service)
                            <div class="col-12 d-flex border border-1 border-secondary rounded shadow">
                                <div class="col-4">
                                    <a href="{{URL::to('services/'.$service->id)}}">
                                        <img width="150" height="100" src="{{asset($service->images)}}" alt="{{$service->$name}}" class="object-fit-cover" data-was-processed="true">
                                    </a>
                                </div>
                                <div class="col-8 mt-3">
                                    <a href="{{URL::to('services/'.$service->id)}}" class="text-decoration-none ">
                                        <h5 class="text-black text-uppercase">{{substr($service->$name,0,100)}}</h5>
                                    </a>
                                    <span>{{date_format($service->updated_at,'Y/m/d H:i')}}</span>
                                </div>

                            </div>

                            <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 justify-content-end">
                    <div class="row">
                        <div class="col-12">
                            {{$services->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
