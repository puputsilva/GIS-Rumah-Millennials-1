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
        <a href="{{ route('team.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Back</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Edit Team</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group p-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
                        @error('position')
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
                        @if ($team->image)
                            <div class="pt-2">
                                Picture Now:
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Team Image"
                                    style="max-width: 100px;">
                            </div>
                        @else
                            <div class="pt-2">
                                No picture
                            </div>
                        @endif
                    </div>


                    <div class="form-group p-2">
                        <label>Facebook</label>
                        <input type="url" name="facebook" class="form-control" value="{{ $team->facebook }}"
                            placeholder="Link Facebook">
                        @error('facebook')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Twitter</label>
                        <input type="url" name="twitter" class="form-control" value="{{ $team->twitter }}"
                            placeholder="Link Twitter">
                        @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Instagram</label>
                        <input type="url" name="instagram" class="form-control" value="{{ $team->instagram }}"
                            placeholder="Link Instagram">
                        @error('instagram')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Linkedin</label>
                        <input type="url" name="linkedin" class="form-control" value="{{ $team->linkedin }}"
                            placeholder="Link Linkedin">
                        @error('linkedin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #303030; color:white">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
