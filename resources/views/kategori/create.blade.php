@extends('layouts.mainadmin')

@section('content')


<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <form action="{{ url('/kategori/tambah') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="id">Id</label>
            <input type="text" class="form-control form-control-border" id="id" placeholder="Id" name="id" value="{{ old('id') }}">
            @error('id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama">Nama kategori</label>
            <input type="text" class="form-control form-control-border" id="nama" placeholder="Nama kategori" name="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <a href="{{ url('/kategori') }}" class="btn btn-info btn-sm">Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
</section>

@endsection