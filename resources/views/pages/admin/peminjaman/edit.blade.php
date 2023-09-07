@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Rubah Data</h3>
          </div>

          <div class="card-body">
            <form action="{{ route('peminjaman_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="id_buku">Nama Buku</label>
                <input type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Enter nama buku" value="{{ $item->id_buku }}">
              </div>
              <div class="form-group">
                <label for="id_anggota">Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Enter anggota" value="{{ $item->id_anggota }}">
              </div>
              <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Enter tanggal pinjam" value="{{ $item->tanggal_pinjam }}">
              </div>
              <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" placeholder="Enter tanggal kembali" value="{{ $item->tanggal_kembali }}">
              </div>
             
              <div class="form-group">
                <label for="denda">Denda</label>
                <input type="text" class="form-control" id="denda" name="denda" placeholder="Enter denda" value="{{ $item->denda }}">
              </div>
              <div class="form-group">
                <label for="id_status_peminjaman">Status Peminjaman</label>
                <input type="text" class="form-control" id="id_status_peminjaman" name="id_status_peminjaman" placeholder="Enter status peminjaman" value="{{ $item->id_status_peminjaman }}">
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection