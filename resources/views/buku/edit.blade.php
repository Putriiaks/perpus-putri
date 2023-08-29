@extends('layouts.mainadmin')

@section('content')


<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('buku.update',$buku->id) }}" method="post">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="id">Id</label>
            <input type="text" class="form-control form-control-border" id="id" placeholder="Id" name="id" value="{{ $buku->id }}">
            @error('id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama">Nama Buku</label>
            <input type="text" class="form-control form-control-border" id="nama" placeholder="Nama Buku" name="nama" value="{{ $buku->nama }}">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="id_penulis">Id Penulis</label>
            <input type="text" class="form-control form-control-border" id="id_penulis" placeholder="Id Penulis" name="id_penulis" value="{{ $buku->id_penulis }}">
            @error('id_penulis')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="text" class="form-control form-control-border" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
            @error('tahun_terbit')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="id_penerbit">Id Penerbit</label>
            <input type="text" class="form-control form-control-border" id="id_penerbit" placeholder="Id Penerbit" name="id_penerbit" value="{{ $buku->id_penerbit }}">
            @error('id_penerbit')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="id_kategori">Id Kategori</label>
            <input type="text" class="form-control form-control-border" id="id_kategori" placeholder="Id Kategori" name="id_kategori" value="{{ $buku->id_kategori }}">
            @error('id_kategori')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <input type="text" class="form-control form-control-border" id="sinopsis" placeholder="Sinopsis" name="sinopsis" value="{{ $buku->sinopsis }}">
            @error('sinopsis')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="sampul">Sampul</label>
            <input type="text" class="form-control form-control-border" id="sampul" placeholder="Sampul" name="sampul" value="{{ $buku->sampul }}">
            @error('sampul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <a href="{{ url('/buku') }}" class="btn btn-info btn-sm">Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm">Rubah</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
</section>

@endsection