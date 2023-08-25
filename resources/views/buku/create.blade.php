@extends('layouts.mainadmin')

@section('content')

<div class="content-wrapper">
   
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
                  <input type="text" class="form-control form-control-border" id="id_kategori" placeholder="Id Kategori" name="id" value="{{ old('id') }}">
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

@endsection