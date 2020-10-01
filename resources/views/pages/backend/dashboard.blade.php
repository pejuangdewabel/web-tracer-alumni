@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                <div class="card-header coverjudul">
                  <h3 class="card-title welcome">
                    <i class="fas fa-chalkboard"></i> | Selamat Datang di
                    Website Tracer Alumni
                  </h3>
                  <br />
                  <h6 class="mt-2">
                    <strong>SMA N 13 Bandar Lampung</strong>
                  </h6>
                </div>
@endsection

@section('content')
                    <section class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Jumlah User</span>
                                <span class="info-box-number">
                                  {{ $user }}                                  
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">CPU Traffic</span>
                                <span class="info-box-number">
                                  10
                                  <small>%</small>
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- Grafik-->
                    <section class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <div class="card card-danger">
                              <div class="card-header">
                                <h3 class="card-title">
                                  Diagram Responden Berdasarkan Tahun
                                </h3>
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="card-body">
                                <canvas id="donutChart" style="
                                      min-height: 250px;
                                      height: 250px;
                                      max-height: 250px;
                                      max-width: 100%;
                                    "></canvas>
                              </div>
                              <!-- /.card-body -->
                            </div>
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.container-fluid -->
                    </section>
@endsection

@push('addon-script')
    <!-- ChartJS -->
    <script src="{{ url('backend/vendor/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Page script -->
    <script>    
        $(function () {
        var donutChartCanvas = $("#donutChart").get(0).getContext("2d");
        var donutData = {
            labels: ["2015", "2016"],
            datasets: [{
            data: [10, 50],
            backgroundColor: [
                "#f56954",
                "#00a65a",
                "#f39c12",
                "#00c0ef",
                "#3c8dbc",
                "#d2d6de",
            ],
            }, ],
        };
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };
        var donutChart = new Chart(donutChartCanvas, {
            type: "doughnut",
            data: donutData,
            options: donutOptions,
        });
        });
    </script>
@endpush