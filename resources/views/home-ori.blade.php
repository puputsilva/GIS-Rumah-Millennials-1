@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col
            -sm-6 col-xl-4 mb-4">
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
        </div>
    </div>
@endsection
