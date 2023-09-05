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
            <form action="{{ route('buku_update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" value="{{ $item->nama }}">
              </div>
              <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Enter tahun terbit" value="{{ $item->tahun_terbit }}">
              </div>
              <div class="form-group">
                <label for="id_penulis">Penulis</label>
                <input type="text" class="form-control" id="id_penulis" name="id_penulis" placeholder="Enter penulis" value="{{ $item->id_penulis }}">
              </div>
              <div class="form-group">
                <label for="id_penerbit">Penerbit</label>
                <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" placeholder="Enter penerbit" value="{{ $item->id_penerbit }}">
              </div>
              <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ $kategori->id == $item->id_kategori ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                @endforeach
            </select>
              </div>
              <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Enter sinopsis" value="{{ $item->sinopsis }}">
              </div>
              <div class="form-group">
                <label for="sampul">Sampul</label>
                <input type="file" class="form-control" id="sampul" name="sampul" placeholder="Enter sampul" value="{{ $item->sampul }}">
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