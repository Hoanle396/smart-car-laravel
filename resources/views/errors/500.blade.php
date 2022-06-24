@extends('layouts.client')
@section('title', '404')

@section('content')
        <div class="d-flex align-items-center bg-info justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">500</h1>
                <p class="fs-3"> <span class="text-danger">{{__('Opps !')}}</span> {{__('Server Error.')}}</p>
                <p class="lead">
                    {{__('The server encountered an internal error or misconfiguration and was unable to complete your request.')}}
                  </p>
                <a href="{{URL::to('/')}}" class="btn btn-primary">{{__('Go Home')}}</a>
            </div>
        </div>

@endsection
