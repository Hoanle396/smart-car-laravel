@extends('layouts.client')
@section('title', 'Product')
@section('content')
@php
    $address=DB::table('settings')->where('name','address')->select('value')->first();
    $phone=DB::table('settings')->where('name','phone')->select('value')->first();
    $email=DB::table('settings')->where('name','email')->select('value')->first();
@endphp
<div class="position-relative flex justify-center items-center" style="margin-top: -10px;">
    <img src="{{asset('public/images/221340M_1920x1080.webp')}}" class="w-100 img-fluid object-fit-cover">
    <div class="position-absolute bottom-0 start-0 d-flex flex-col items-center">
        <b class="text-danger fs-3">{{__('lang.lienhe')}}</b>
    </div>
</div>
<div class="bg-white pt-5" style="min-height: calc((100vh - 11.05rem) - 8rem);">
    <div class="bg-white">
        <div class="container ">
            <section class="pb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center py-4">{{__('lang.lienhe')}}</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">{{__('lang.question')}}</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">{{__('lang.tencuaban')}}</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">{{__('lang.emailcuaban')}}</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">{{__('lang.tieude')}}</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">{{__('lang.noidung')}}</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="text-center text-md-left">
                                <button class="btn btn-md btn-primary" type="submit">{{__('lang.gui')}}</button>
                            </div>
                        </form>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>{{$address->value}}</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>{{$phone->value}}</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>{{$email->value}}</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </div>
</div>
@endsection
