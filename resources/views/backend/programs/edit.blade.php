@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <div class="container">
        <a href="{{ route('program.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Back</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Edit Program</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('program.update', $programs->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group p-2">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"
                            value="{{ old('title', $programs->title) }}" required>
                    </div>

                    <div class="form-group p-2">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control"
                            value="{{ old('description', $programs->description) }}">
                    </div>

                    <div class="form-group p-2">
                        <label>Icon (Class of Icon)</label>
                        <input type="text" name="icon" class="form-control" value="{{ old('icon', $programs->icon) }}"
                            required>
                    </div>

                    <button type="submit" class="btn" style="background-color: #303030; color:white">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
