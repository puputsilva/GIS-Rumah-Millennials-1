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
    <style>
        .card:hover {
            background-color: skyblue;
            /* Change the background color to sky blue on hover */
        }

        /* .card:hover a {
                                                        color: white;
                                                    } */
    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ url('/centre-point') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> Center Point
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ url('/spot') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> Spot
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ route('program.index') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> Program
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ route('qna.index') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> QnA
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ route('team.index') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> Teams
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <a href="{{ route('partnership.index') }}">
                    <div class="card border-50 shadow text-center">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h3 class="fw-extrabold mb-2"> Partnership
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
