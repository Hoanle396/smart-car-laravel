@extends('layouts.client')
@section('title', 'Car New')
@section('content')
@php
$name='name_'.app()->getlocale();
@endphp
<div class="position-relative flex justify-center items-center " style="margin-top: -10px;">
    <img src="{{asset('public/images/221340M_1920x1080.webp')}}" class="w-100 img-fluid object-fit-cover">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">{{__('lang.xedangco')}}</b>
    </div>
</div>
<div class="bg-white" style="min-height: calc((100vh - 11.05rem) - 8rem);">
    <div class="bg-white">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                    {{__('lang.search')}}
                                    </div>
                                    <form action="{{URL::to('car/search')}}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="tk" class="form-label">{{__('lang.tukhoa')}}</label>
                                                    <input type="text" name="tukhoa" id="tk" class="form-control" placeholder="{{__('lang.tukhoa')}}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="hang" class="form-label">{{__('lang.hang')}}</label>
                                                    <select name="hang" id="hang" class="form-control">
                                                        <option class=" text-uppercase" value="all">{{__('lang.hang')}}</a>
                                                            @foreach ($logos as $logo)
                                                        <option class=" text-uppercase" value="{{$logo->name}}">{{$logo->name}}</a>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 no-padding">
                                                <button class="form-control btn btn-sm btn-warning" type="submit">{{__('lang.search')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="list-inline shop-top-menu pb-3 pt-1">
                                <li class="list-inline-item">
                                    <a class="h3 text-info text-decoration-none mr-3" href="#">A-Z</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h3 text-info text-decoration-none mr-3" href="#">Z-A</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h3 text-info text-decoration-none" href="#">Kilomet</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 pb-4">
                            <div class="dropdown">
                                <!--Trigger-->
                                <button class="btn  btn-sm dropdown-toggle" type="button" id="dropdownMenu1-1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i> {{__('lang.boloc')}}</button>

                                <!--Menu-->
                                <div class="container dropdown-menu dropdown-primary" id="your-custom-id" aria-labelledby="ropdownMenu1-1">

                                    @foreach ($logos as $logo)
                                    <a class="dropdown-item mdb-dropdownLink-1 text-uppercase" href="{{URL::to('car/'.$logo->name)}}">{{$logo->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($cars as $car)
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <img class=" img-resize card-img-top" src="{{asset(json_decode($car->images)[0])}}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{substr($car->$name, 0, 30)}}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted "><i class="fa-solid fa-gauge"></i> : {{$car->kilomet}} KM</span>
                                        <span class="text-muted "><i class="fa-solid fa-calendar-days"></i> : {{$car->manufacture}}</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-primary mt-auto" href="{{URL::to('/car/detail/'.$car->id)}}">{{__('lang.chitiet')}}</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div div="row">
                        {{$cars->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
