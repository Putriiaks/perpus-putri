@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Kategori</h3>
        </div>
    </div>
</div>


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Kategori</h2>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

<div class="card-body">
    <div class="col-md-6">

<form method="get" action="{{ route('kategori_search') }}">
        <form method="get" action="/search">
    <div class="input-group">
        <input type="search" class="form-control" name="search" placeholder="Search for category name">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Filter
         </button>
    </div>
</form>
 </div>
</div>

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ route('kategori_create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('kategori-excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
             <a href="{{ url('kategori-pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama</th>
                        <th width="250px" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                @foreach($kategoris as $k)
                <tbody>
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration }}</td>
                        <td style="text-align:center">{{ $k->nama }}</td>
                        <td style="text-align:center">
                            <for action="" method="POST">

                                <a class="btn btn-info" href="">
                                <i class="fas fa-fw fa-eye"></i></a>

                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection