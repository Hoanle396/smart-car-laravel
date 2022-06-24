@extends('layouts.client')
@section('title', 'Product')
@section('content')
<div class="position-relative flex justify-center items-center ">
    <img src="{{asset('public/images/istockphoto-1157655660-612x612.jpg')}}" class="w-100 img-fluid object-fit-cover">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">CONTACT INFORMATION</b>
    </div>
</div>
<div class="bg-white" style="min-height: calc((100vh - 11.05rem) - 8rem);">
    <div class="bg-white">
        <div class="container mx-2 ">
            <div>
                content
            </div>
        </div>
    </div>
</div>
@endsection
