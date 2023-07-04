@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total Barang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Total Member</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Total Penjualan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Total Kategori</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Stok Barang Terbanyak</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th style="width: 40px">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-warning">70%</span></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">30%</span></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-success">90%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
