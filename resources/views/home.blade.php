{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.dashboard-volt')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow text-center">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h3 class="fw-extrabold mb-2">
                                    <a href="{{url('/centre-point')}}"> Centre Point </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h3 class="fw-extrabold mb-2">
                                    <a href="{{url('/spot')}}"> Spot </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection