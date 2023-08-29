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
        Data kategori <br>
        <a href="{{ url('/kategori/create') }}" class="btn btn-primary btn-sm">Tambah kategori</a>
      </div>
      <div class="card-body">
        <table class="table table-striped-columns">  
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama kategori</th>
              <th>Aksi</th>      
            </tr>
          </thead>
          @foreach($kategori as $k)
          <tbody>
            <tr>
              <td>{{ $k->id}}</td>
              <td>{{ $k->nama}}</td>
              <td>
                <a href="{{ route('kategori.edit',$k->id) }}" class="badge bg-warning">
                  <i class="fas fa fa-edit text-white"></i>
                </a>
                <form action="{{ route('kategori.destroy',$k->id) }}" method="post" class="d-inline">
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