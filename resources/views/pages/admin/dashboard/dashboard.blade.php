@extends('layouts.admin')

@section('content')

    <div class="content">

    <div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Rekap</h2>
    </div>

        <!-- Small boxes (Stat box) -->
        <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Buku</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="{{ route('buku_index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $penerbit }}</h3>
                <p>Jumlah Penerbit</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-building"></i>
              </div>
              <a href="{{ route('penerbit_index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $penulis }}</h3>
                <p>Jumlah Penulis</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-pencil-alt"></i>
              </div>
              <a href="{{ route('penulis_index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $kategori }}</h3>
                <p>Jumlah Kategori</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-fw fa-tags"></i>
              </div>
              <a href="{{ route('kategori_index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $peminjaman }}</h3>
                <p>Jumlah Peminjaman</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-fw fa-hand-holding-dollar"></i>
              </div>
              <a href="{{ route('peminjaman_index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        </div>
</div>
</div>




@endsection