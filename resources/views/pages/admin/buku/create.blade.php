@extends('layouts.admin')

@section('content')




<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <form action="{{ url('/pages/admin/buku/tambah') }}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" placeholder="id">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="id_penulis">Id Penulis</label>
                    <input type="text" class="form-control" id="id_penulis" placeholder="id penulis">
                  </div>
                  <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" placeholder="tahun terbit">
                  </div>
                  <div class="form-group">
                    <label for="id_penerbit">Id Penerbit</label>
                    <input type="text" class="form-control" id="id_penerbit" placeholder="id penerbit">
                  </div>
                  <div class="form-group">
                    <label for="id_kategori">Id Kategori</label>
                    <input type="text" class="form-control" id="id_kategori" placeholder="kategori">
                  </div>
                  <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" placeholder="sinopsis">
                  </div>
                  <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <input type="text" class="form-control" id="sampul" placeholder="sampul">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </form>
            </div>
            <!-- /.card -->

            

    @endsection