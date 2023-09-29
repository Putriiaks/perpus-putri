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

<div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Grafik Buku Berdasarkan Penerbit
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <div id="penerbit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Grafik Buku Berdasarkan Penulis
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <div id="penulis">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        Grafik Buku Berdasarkan Kategori
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <div id="kategori">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('penerbit', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Penerbit Buku'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Lentera Dipantara',
            'Gramedia Pustaka Utama',
            'PT Kompas Media Nusantara',
            'Bukunesia',

        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Jumlah Buku'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Buku',
        data: [15.93, 13.63, 18.73, 15.18]

    }]
});
</script>

<script>
   Highcharts.chart('penulis', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Penulis Buku'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Henry Manampiring', 'Eka Kurniawan', 'Pramoedya Ananta Toer', 'Tere Liye'
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Jumlah Buku'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Buku',
        data: [15.93, 13.63, 18.73, 15.00]

    }]
});
</script>

<script>
Highcharts.chart('kategori', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Kategori',
    },
    

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            borderRadius: 5,
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: 'Browsers',
            colorByPoint: true,
            data: [
                {
                    name: 'Drama',
                    y: 50.04,
                    drilldown: 'Drama'
                },
                {
                    name: 'Fiksi',
                    y: 30.47,
                    drilldown: 'Fiksi'
                },
                {
                    name: 'Fiksi Sejarah',
                    y: 20.32,
                    drilldown: 'Fiksi Sejarah'
                },
                {
                    name: 'Self Improvement',
                    y: 20.15,
                    drilldown: 'Self Improvement'
                },
                {
                    name: 'Other',
                    y: 11.02,
                    drilldown: null
                }
            ]
        }
    ],
    
});
</script>


@endsection