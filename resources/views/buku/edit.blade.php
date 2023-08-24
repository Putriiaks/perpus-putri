@extends('layouts.main')
@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6> <br>
    <a href="/" class="btn btn-primary btn-sm">Kembali ke Data Siswa</a>
        </div>
        <div class="card-body">
            <form action="/siswa/{{ $siswa->id }}" method="post">
                @method('put')
                @csrf
                <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="nis" class="form-label">Nomor Induk Siswa</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
              <label for="nama" class="form-label">Nama Siswa</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}">
            </div>
      </div>
</div>

<div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
              <label for="jk" class="form-label">Jenis Kelamin Siswa</label>
              <input type="text" class="form-control" id="jk" name="jk" value="{{ $siswa->jk }}">
            </div>
      </div>
</div>

<div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}">
            </div>

        </div>
        <div class="col-lg-6">
           <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Siswa</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
           </div>
      </div>
      <button type="submit" class="btn btn-outline-primary btn-sm">Rubah Data</button>
</div>
</form>
</div>
</div>

@endsection