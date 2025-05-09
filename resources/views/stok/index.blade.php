@extends('layouts.template')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Daftar Stok</h3>
    <div class="card-tools">
      <button onclick="modalAction('{{ url('/stok/import') }}')" class="btn btn-info">Import Stok</button>
      <a href="{{ url('/stok/export_excel') }}" class="btn btn-primary"><i class="fa fa-file-excel"></i> Export Stok (Excel)</a>
      <a href="{{ url('/stok/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Export Stok (PDF)</a>
      <button onclick="modalAction('{{ url('/stok/create_ajax') }}')" class="btn btn-success">Tambah Data (Ajax)</button>
    </div>
  </div>

  <div class="card-body">
    <!-- Filter Stok -->
    <div id="filter" class="form-horizontal filter-date p-2 border-bottom mb-2">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group form-group-sm row text-sm mb-0">
            <label for="filter_barang" class="col-md-1 col-form-label">Filter</label>
            <div class="col-md-3">
              <select name="filter_barang" class="form-control form-control-sm filter_barang">
                <option value="">- Semua -</option>
                @foreach($barang as $l)
                  <option value="{{ $l->barang_id }}">{{ $l->nama_barang }}</option>
                @endforeach
              </select>
              <small class="form-text text-muted">Nama Barang</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered table-sm table-striped table-hover" id="table-stok">
      <thead>
        <tr>
          <th style="text-align: center;">No</th>
          <th style="text-align: center;">ID Stok</th>
          <th style="text-align: center;">Nama Barang</th>
          <th style="text-align: center;">Nama Penyetok</th>
          <th style="text-align: center;">Tanggal Stok</th>
          <th style="text-align: center;">Jumlah Stok</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection

@push('js')
<script>
  function modalAction(url = '') {
    $('#myModal').load(url, function () {
      $('#myModal').modal('show');
    });
  }

  var dataStok;
  $(document).ready(function () {
    dataStok = $('#table-stok').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        "url": "{{ url('stok/list') }}",
        "dataType": "json",
        "type": "POST",
        "data": function (d) {
          d.filter_barang = $('.filter_barang').val();
        }
      },
      columns: [
        {
          data: "DT_RowIndex",
          className: "text-center",
          width: "4%",
          orderable: false,
          searchable: false
        },
        {
          data: "stok_id",
          className: "text-center",
          width: "10%",
          orderable: true,
          searchable: false
        },
        {
          data: "barang.nama_barang",
          className: "",
          width: "25%",
          orderable: true,
          searchable: true
        },
        {
          data: "user.nama",
          className: "",
          width: "25%",
          orderable: true,
          searchable: true
        },
        {
          data: "stok_tanggal",
          className: "text-center",
          width: "15%",
          orderable: true,
          searchable: true
        },
        {
          data: "stok_jumlah",
          className: "text-center",
          width: "10%",
          orderable: true,
          searchable: false
        },
        {
          data: "aksi",
          className: "text-center",
          width: "15%",
          orderable: false,
          searchable: false
        }
      ]
    });

    $('#table-stok_filter input').unbind().bind().on('keyup', function (e) {
      if (e.keyCode == 13) {
        dataStok.search(this.value).draw();
      }
    });

    $('.filter_barang').change(function () {
      dataStok.draw();
    });
  });
</script>
@endpush
