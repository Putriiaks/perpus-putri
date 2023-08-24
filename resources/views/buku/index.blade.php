@extends('layouts.mainadmin')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <div class="container-fluid">
  <div class="card">
  </div>
</div>

<div class="card">
  <div class="card-header">
    Data buku <br>
    <a href="{{ url('buku/create') }}" class="btn btn-primary btn-sm">Tambah buku</a>
  </div>
  <div class="card-body">
    <table class="table table-striped-columns">
    
     <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>id penulis</th>
                                            <th>tahun terbit</th>
                                             <th>id penerbit</th>
                                            <th>id kategori</th>
                                            <th>sinopsis</th>
                                            <th>sampul</th>
                                            
                                        </tr>
                                    </thead>
                                    @foreach($buku as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b->nama}}</td>
                                            <td>{{ $b->id_penulis}}</td>
                                            <td>{{ $b->tahun_terbit}}</td>
                                            <td>{{ $b->id_penerbit}}</td>
                                            <td>{{ $b->id_kategori}}</td>
                                            <td>{{ $b->sinopsis}}</td>
                                            <td>{{ $b->sampul}}</td>
                                             </tr>
                                            <td>
          <form action="/buku/delete/{{ $b->id }}" method="get" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
              <i class="fas fa fa-trash text-white"></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
 </div>
</div>

@endsection