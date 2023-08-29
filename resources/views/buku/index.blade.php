@extends('layouts.mainadmin')

@section('content')

<section class="content">
  <div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif


    <div class="card mt-4">
      <div class="card-header">
        Data buku <br>
        <a href="{{ url('/buku/create') }}" class="btn btn-primary btn-sm">Tambah buku</a>
      </div>
      <div class="card-body">
        <table class="table table-striped-columns">  
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama Buku</th>
              <th>Id penulis</th>
              <th>Tahun terbit</th>
              <th>Id penerbit</th>
              <th>Id kategori</th>
              <th>Sinopsis</th>
              <th>Sampul</th>
              <th>Aksi</th>      
            </tr>
          </thead>
          @foreach($buku as $b)
          <tbody>
            <tr>
              <td>{{ $b->id}}</td>
              <td>{{ $b->nama}}</td>
              <td>{{ $b->id_penulis}}</td>
              <td>{{ $b->tahun_terbit}}</td>
              <td>{{ $b->id_penerbit}}</td>
              <td>{{ $b->id_kategori}}</td>
              <td>{{ $b->sinopsis}}</td>
              <td>{{ $b->sampul}}</td>
              <td>
                <a href="{{ route('buku.edit',$b->id) }}" class="badge bg-warning">
                  <i class="fas fa fa-edit text-white"></i>
                </a>
                <form action="{{ route('buku.destroy',$b->id) }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                    <i class="fas fa fa-trash text-white"></i>
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</section>



@endsection