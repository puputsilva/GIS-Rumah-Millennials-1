@extends('layouts.dashboard-volt')

@section('content')
    <div class="container">
        <a href="{{ route('event.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Back</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Add Event</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group p-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" required>
                        @error('description')
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

                    <div class="form-group p-2">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" required>
                        @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" required>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" required>
                        @error('date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" required>
                        @error('location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Google Map Link</label>
                        <input type="text" name="google_map_link" class="form-control" required>
                        @error('google_map_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Google Map Embed</label>
                        <input type="text" name="google_map_embed" class="form-control" required>
                        @error('google_map_embed')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="belum">Belum</option>
                            <option value="sudah">Sudah</option>
                        </select>
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
