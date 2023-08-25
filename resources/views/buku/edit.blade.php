@extends('layouts.mainadmin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Create</a></li>
              <li class="breadcrumb-item active">Tambah Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <div class="container-fluid">
        <div class="card">
  <div class="card-header">
    Tambah Buku
  </div>
  <div class="card-body">
                <a href="{{ url('/buku') }}" class="btn btn-info btn-sm">Kembali</a>
                <form action="{{ url('/buku/tambah') }}" method="post">
                  @csrf
                  <div class="form-group">
                  <label for="id">Id</label>
                  <input type="text" class="form-control form-control-border" id="id" placeholder="id" name="id" value="{{ old('id') }}">
                  @error('id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                  <div class="form-group">
                  <label for="namabuku">Nama Buku</label>
                  <input type="text" class="form-control form-control-border" id="namabuku" placeholder="Nama Buku" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_penulis">Id Penulis</label>
                  <input type="text" class="form-control form-control-border" id="id_penulis" placeholder="Id Penulis" name="id" value="{{ old('id') }}">
                  @error('id_penulis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="tahun_terbit">Tahun Terbit</label>
                  <input type="text" class="form-control form-control-border" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun" value="{{ old('tahun') }}">
                  @error('tahun_terbit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_penerbit">Id Penerbit</label>
                  <input type="text" class="form-control form-control-border" id="id_penerbit" placeholder="Id Penerbit" name="id" value="{{ old('id') }}">
                  @error('id_penerbit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_kategori">Id Kategori</label>
                  <input type="text" class="form-control form-control-border" id="id_kategori" placeholder="Tahun Terbit" name="tahun" value="{{ old('tahun') }}">
                  @error('id_kategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinopsis</label>
                  <input type="text" class="form-control form-control-border" id="sinopsis" placeholder="Sinopsis" name="sinopsis" value="{{ old('sinopsis') }}">
                  @error('sinopsis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="sampul">Sampul</label>
                  <input type="text" class="form-control form-control-border" id="sampul" placeholder="Sampul" name="sampul" value="{{ old('sampul') }}">
                  @error('sampul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
                </div>
              <!-- /.card-body -->
    </div>
  </div>
</div>

@endsections