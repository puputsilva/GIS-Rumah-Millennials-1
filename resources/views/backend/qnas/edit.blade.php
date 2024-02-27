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
        <a href="{{ route('qna.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Kembali</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Ubah Buku</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('qna.update', $qna->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group p-2">
                        <label>Question</label>
                        <input type="text" name="question" class="form-control"
                            value="{{ old('title', $qna->question) }}" required>
                    </div>

                    <div class="form-group p-2">
                        <label>Answer</label>
                        <input type="text" name="answer" class="form-control"
                            value="{{ old('answer', $qna->answer) }}">
                    </div>

                    <button type="submit" class="btn" style="background-color: #303030; color:white">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
