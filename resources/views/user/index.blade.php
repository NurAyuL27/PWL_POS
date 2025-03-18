@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
            <thead>
                <tr><th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Pengguna</th>
                    <th>Aksi</th></tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('css')
<style>
    #table_user th, #table_user td {
        white-space: nowrap; /* Agar teks tidak terpotong */
        padding: 10px; /* Tambahkan padding agar lebih rapi */
    }

    #table_user th:nth-child(2), #table_user td:nth-child(2) { 
        width: 200px; /* Ubah lebar kolom Username */
    }

    #table_user th:nth-child(3), #table_user td:nth-child(3) { 
        width: 250px; /* Ubah lebar kolom Nama */
    }

    #table_user th:nth-child(4), #table_user td:nth-child(4) { 
        width: 180px; /* Ubah lebar kolom Level Pengguna */
    }

    #table_user th:nth-child(5), #table_user td:nth-child(5) { 
        width: 220px; /* Ubah lebar kolom Aksi */
    }
</style>
@endpush

@push('js')
<script>
    $(document).ready(function() {
        var dataUser = $('#table_user').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('user/list') }}",
                "dataType": "json",
                "type": "GET"
            },
            columns: [
                { 
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                },
                { 
                    data: "username",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                { 
                    data: "nama",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                { 
                    data: "level.level_nama",
                    className: "",
                    orderable: false,
                    searchable: false
                },
                { 
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
@endpush
