@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold" style="color: black">Event Data</h4>
                        <div class="d-sm-flex align-items-center mt-3">
                            <a href="{{ route('event.create') }}" class="btn text-white"
                                style="background-color: #303030"><i class="fas fa-plus-circle"></i>Add Event</a>
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

                        <table class="table" id="dataQna">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Actions</th> <!-- Tambah kolom untuk aksi -->
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
        var deleteRoute = "{{ route('event.destroy', ':id') }}";
        $(function() {
            $('#dataQna').DataTable({
                processing: true,
                serverSide: true,
                responsive: true, // Perbaiki penulisan "responsive"
                lengthChange: true,
                autoWidth: false,
                ajax: '{{ route('event.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name'
                    }, {
                        data: 'category'
                    }, {
                        data: 'city'
                    }, {
                        data: 'date',
                        render: function(data) {
                            // Buat objek Date dari nilai data yang diterima
                            var date = new Date(data);
                            // Daftar nama bulan sesuai dengan urutan bulan (0-11)
                            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                                "Juli", "Agustus", "September", "Oktober", "November",
                                "Desember"
                            ];
                            // Dapatkan tanggal, bulan, dan tahun
                            var day = date.getDate();
                            var monthIndex = date.getMonth();
                            var year = date.getFullYear();
                            // Kembalikan tanggal yang diformat
                            return day + ' ' + months[monthIndex] + ' ' + year;
                        }
                    }, {
                        data: 'image',
                        render: function(data) {
                            return '<img src="{{ asset('storage/') }}/' + data +
                                '" alt="Cover Image" style="max-width: 50px;">';
                        }
                    }, {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return `
                                <a href="{{ route('event.edit', ':id') }}" class="btn btn-warning">Edit</a>
                                <form style="display:inline-block;" id="deleteForm_${data.id}" method="POST" action="${deleteRoute.replace(':id', data.id)}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Partnership ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            `.replace(':id', data.id);
                        }
                    }
                ]
            });
        });
    </script>
@endpush
