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
            <h3 class="card-title">Tambah Data</h3>
          </div>

          <div class="card-body">
            <form action="{{ route('buku_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
              </div>
              <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Enter tahun terbit">
              </div>
              <div class="form-group">
                <label for="id_penulis">Penulis</label>
                <input type="text" class="form-control" id="id_penulis" name="id_penulis" placeholder="Enter penulis">
              </div>
              <div class="form-group">
                <label for="id_penerbit">Penerbit</label>
                <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" placeholder="Enter penerbit">
              </div>
              <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori">
                <option selected>Pilih Kategori</option>
                @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                @endforeach
            </select>
              </div>
              <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Enter sinopsis">
              </div>
              <div class="form-group">
                <label for="sampul">Sampul</label>
                <input type="text" class="form-control" id="sampul" name="sampul" placeholder="Enter sampul">
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