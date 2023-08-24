@extends('layouts.main')
@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
     </div>
        <div class="card-body">
            <form action="/buku/tambah" method="post">
                @csrf
                <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="" class="form-label">Nomor Induk Siswa</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Nomor Induk Siswa">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
              <label for="nama" class="form-label">Nama Siswa</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa">
            </div>
      </div>
</div>

<div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
              <label for="jk" class="form-label">Jenis Kelamin Siswa</label>
              <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin Siswa">
            </div>
      </div>
</div>

<div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Siswa</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
           </div>
      </div>
      <button type="submit" class="btn btn-outline-primary btn-sm">Tambah Data</button>
</div>
</form>
</div>
</div>

@endsection