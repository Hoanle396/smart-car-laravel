@extends('layouts.client')
@section('meta')
@php
$name='name_'.app()->getlocale();
$description='description_'.app()->getlocale();
@endphp
<meta name="description" content="{{$data->$name}}" />
<meta name="keywords" content="{{$data->$name}}" />
@endsection
@section('title', 'Detail')
@section('content')

<div class="position-relative flex justify-center items-center " style="margin-top: -10px;">
    <img src="{{asset($data->images)}}" class="w-100 object-fit-cover" height="500">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">{{$data->$name}}</b>
    </div>
</div>
<div class="bg-white" style="min-height: calc((100vh - 11.05rem) - 8rem);" style="margin-top: -10px;">
    <div class="bg-white">
        <div class="container mb-5 pt-5">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class=" mb-100">
                    <ul class="nav nav-tabs pb-2" id="myTab" role="tablist">
                        <li class="title" style="font-size: 30px;">{{$data->$name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-auto mb-100">
            <div class=" border rounded shadow d-flex py-2 px-2 justify-content-center">
                {!!$data->$description!!}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
