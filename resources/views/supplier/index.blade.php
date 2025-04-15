@extends('layouts.template')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Daftar Supplier</h3>
    <div class="card-tools">
    <button onclick="modalAction('{{ url('/supplier/import') }}')" class="btn btn-info">Import Supplier</button>
      <a href="{{ url('/supplier/create') }}" class="btn btn-primary">Tambah Data</a>
      <button onclick="modalAction('{{ url('/supplier/create_ajax') }}')" class="btn btn-success">Tambah Data (Ajax)</button>
    </div>
  </div>

  <div class="card-body">
    {{-- Optional: filter supplier jika ada --}}
    {{-- 
    <div id="filter" class="form-horizontal filter-date p-2 border-bottom mb-2">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group form-group-sm row text-sm mb-0">
            <label class="col-md-1 col-form-label">Filter</label>
            <div class="col-md-3">
              <input type="text" name="filter_nama" class="form-control form-control-sm filter_nama" placeholder="Nama Supplier">
              <small class="form-text text-muted">Nama Supplier</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    --}}

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered table-sm table-striped table-hover" id="table-supplier">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Supplier</th>
          <th>Kode</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

{{-- Modal --}}
<div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection

@push('js')
<script>
  function modalAction(url = '') {
    $('#myModal').load(url, function () {
      $('#myModal').modal('show');
    });
  }

  var tableSupplier;
  $(document).ready(function () {
    tableSupplier = $('#table-supplier').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{ url('supplier/list') }}",
        dataType: "json",
        type: "POST",
        // data: function (d) {
        //   d.filter_nama = $('.filter_nama').val(); // kalau ada filter
        // }
      },
      columns: [
        {
          data: null,
          className: "text-center",
          width: "5%",
          orderable: false,
          searchable: false,
          render: function (data, type, row, meta) {
            return meta.row + 1;
          }
        },
        {
          data: "supplier_nama",
          className: "",
          orderable: true,
          searchable: true
        },
        {
          data: "supplier_kode",
          className: "",
          orderable: true,
          searchable: true
        },
        {
          data: "supplier_alamat",
          className: "",
          orderable: true,
          searchable: true
        },
        {
          data: "aksi",
          className: "text-center",
          orderable: false,
          searchable: false
        }
      ]
    });

    $('#table-supplier_filter input').unbind().bind().on('keyup', function (e) {
      if (e.keyCode == 13) {
        tableSupplier.search(this.value).draw();
      }
    });

    $('.filter_nama').change(function () {
        tableSupplier.draw(); // jika ingin pakai filter
    });
  });
</script>
@endpush
