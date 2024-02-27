@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('program.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Kembali</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Tambah Program</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('program.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group p-2">
                        <label>Program Title</label>
                        <input type="text" name="title" class="form-control" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Program Description</label>
                        <textarea class="form-control" name="description" rows="3" required></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Icon (Class of Icon)</label>
                        <input type="text" name="icon" class="form-control" required>
                        @error('icon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #303030; color:white">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endpush
