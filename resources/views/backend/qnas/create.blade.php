@extends('layouts.admin.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <div class="container">
        <a href="{{ route('qna.index') }}" class="btn mb-3" style="background-color: #303030; color:white">Kembali</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-black">Tambah QnA</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('qna.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group p-2">
                        <label>Question</label>
                        <input type="text" name="question" class="form-control" required>
                        @error('question')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group p-2">
                        <label>Answer</label>
                        <textarea class="form-control" name="answer" rows="3" required></textarea>
                        @error('answer')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #303030; color:white">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endpush
