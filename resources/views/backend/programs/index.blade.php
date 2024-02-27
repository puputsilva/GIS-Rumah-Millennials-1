@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Set Program
                        <a href="{{ route('program.create') }}" class="btn btn-info btn-sm float-end">Create Program</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <form action="#" method="POST" id="deleteForm">
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
        var deleteRoute = "{{ route('program.destroy', ':id') }}";
        $(function() {
            $('#dataCenterPoint').DataTable({
                processing: true,
                serverSide: true,
                responisve: true,
                lengthChange: true,
                autoWidth: false,
                ajax: '{{ route('program.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'title'
                    },
                    {
                        data: 'description',
                        render: function(data) {
                            return data.length > 50 ? data.substr(0, 50) + '...' : data;
                        }
                    },
                    {
                        data: 'icon',
                        render: function(data) {
                            return '<div class="icon"><i class="' + data + '"></i></div>';
                        }
                    }, {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return `
                        <a href="{{ route('program.edit', ':id') }}" class="btn" style="background-color: #F3C78E;">Edit</a>
                        <form style="display:inline-block;" id="deleteForm_${data.id}" method="POST" action="${deleteRoute.replace(':id', data.id)}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    `.replace(':id', data.id);
                        }
                    }

                ]
            })
        })
    </script>
@endpush
