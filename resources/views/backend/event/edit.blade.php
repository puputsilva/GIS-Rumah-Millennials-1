@extends('layouts.admin.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <div class="container">
        <a href="{{ route('event.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Back</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Edit Event</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group p-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{ $event->description }}"
                            required>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Image</label>
                        <div class="text-danger"></div>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @if ($event->image)
                            <div class="pt-2">
                                Picture Now:
                                <img src="{{ asset('storage/' . $event->image) }}" alt="Team Image"
                                    style="max-width: 100px;">
                            </div>
                        @else
                            <div class="pt-2">
                                No picture
                            </div>
                        @endif
                    </div>

                    <div class="form-group p-2">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" value="{{ $event->category }}" required>
                        @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{ $event->city }}" required>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="{{ $event->date }}" required>
                        @error('date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control" value="{{ $event->location }}" required>
                        @error('location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Google Map Link</label>
                        <input type="text" name="google_map_link" class="form-control"
                            value="{{ $event->google_map_link }}" required>
                        @error('google_map_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Google Map Embed</label>
                        <input type="text" name="google_map_embed" class="form-control"
                            value="{{ $event->google_map_embed }}" required>
                        @error('google_map_embed')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="belum" {{ $event->status == 'belum' ? 'selected' : '' }}>Belum</option>
                            <option value="sudah" {{ $event->status == 'sudah' ? 'selected' : '' }}>Sudah</option>
                        </select>
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #303030; color:white">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endpush
