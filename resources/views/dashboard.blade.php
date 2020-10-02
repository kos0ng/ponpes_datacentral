@extends('template')

@section('judul_halaman','Dashboard')

@section('dashboard','active')

@section('konten')

<script type="text/javascript">
    var l_count = JSON.parse("{{ json_encode($laki) }}");
    var p_count = JSON.parse("{{ json_encode($perempuan) }}");
</script>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ringkasan</h2>
                                    {{-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <span>Total Santri  </span>
                                                <h2>{{ $jumlah_santri }}</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-layers"></i>
                                            </div>
                                            <div class="text">
                                                <span>Total Lembaga</span>
                                                <h2>{{ $jumlah_lembaga }}</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <span>Santri Pondok</span>
                                                <h2>{{ $jumlah_santripondok }}</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <span>Santri Madrasah</span>
                                                <h2>{{$jumlah_santripondok}}</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                               {{--  <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-8">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Presentase Santri dan Santriwati</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Santri</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Santriwati</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <h2 class="title-1 m-b-25">Data Santri Terbaru</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nomor Induk Santri</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Jenis Kelamin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $u)
                                            <tr>
                                                <td>{{ $u->id_santri }}</td>
                                                <td>{{ $u->nama }}</td>
                                                <td>{{ $u->tempat_lahir }}</td>
                                                <td>{{ $u->jenis_kelamin }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="title-1 m-b-25">Santri per Lembaga</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    {{-- <tr>
                                                        <td>Pondok Putra Induk</td>
                                                        <td class="text-right">14</td>
                                                    </tr> --}}
                                                    @foreach($pondok as $row)
                                                    @php
                                                    $jumlah=DB::table('pondok')->where(['id_pondok'=>$row->induk_lembaga])->count();
                                                    @endphp
                                                    <tr>
                                                        <td>{{$row->nama_lembaga}}</td>
                                                        <td class="text-right">{{$jumlah}}</td>
                                                    </tr>
                                                    @endforeach
                                                    @foreach($madrasah as $row)
                                                    @php
                                                    $jumlah=DB::table('madrasah')->where(['id_madrasah'=>$row->induk_lembaga])->count();
                                                    @endphp
                                                    <tr>
                                                        <td>{{$row->nama_lembaga}}</td>
                                                        <td class="text-right">{{$jumlah}}</td>
                                                    </tr>
                                                    @endforeach
                                                    {{-- <tr>
                                                        <td>Pondok Putri Induk</td>
                                                        <td class="text-right">3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pondok An Nur</td>
                                                        <td class="text-right">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pondok Al Anwar</td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pondok As Salam</td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pondok Al Fatih</td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pondok Al Huda</td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Madrasah Diniyah Futuhiyah</td>
                                                        <td class="text-right">13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Madrasah Diniyah Quraniyah</td>
                                                        <td class="text-right">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Madrasah Diniyah Almunawaroh</td>
                                                        <td class="text-right">1</td>
                                                    </tr>
                                                     <tr>
                                                        <td>Madrasah Ibtidaiyah</td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                     <tr>
                                                        <td>TK Kusuma Mulia</td>
                                                        <td class="text-right">0</td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
@endsection