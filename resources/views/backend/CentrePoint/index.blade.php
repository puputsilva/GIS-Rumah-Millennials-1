@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold" style="color: black">Set Center Point</h4>
                        <div class="d-sm-flex align-items-center mt-3">
                            <a href="{{ route('centre-point.create') }}" class="btn text-white"
                                style="background-color: #303030"><i class="fas fa-plus-circle"></i> Add
                                Spot</a>
                        </div>
                    </div>
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <table class="table" id="dataCenterPoint">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Titik Koordinat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <form action="" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" style="display:none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
            $('#dataCenterPoint').DataTable({
                processing: true,
                serverSide: true,
                responisve: true,
                lengthChange: true,
                autoWidth: false,
                ajax: '{{ route('centre-point.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'coordinates'
                    },
                    {
                        data: 'action'
                    }
                ]
            })
        })
    </script>
@endpush
