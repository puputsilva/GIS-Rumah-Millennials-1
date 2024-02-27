@extends('layouts.dashboard-volt')

@section('content')
    <div class="container">
        <a href="{{ route('partnership.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Back</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Add Partnership</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('partnership.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group p-2">
                        <label>Name</label>
                        <input type="text"
                        name="name" class="form-control" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #303030; color:white">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endpush
