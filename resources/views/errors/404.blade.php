@extends('layouts.client')
@section('title', '404')

@section('content')
        <div class="d-flex align-items-center bg-info justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">{{__('Opps !')}}</span> {{__('Page not found.')}}</p>
                <p class="lead">
                    {{__('The page you’re looking for doesn’t exist.')}}
                  </p>
                <a href="{{URL::to('/')}}" class="btn btn-primary">{{__('Go Home')}}</a>
            </div>
        </div>

@endsection