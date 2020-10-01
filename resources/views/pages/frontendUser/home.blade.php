@extends('layouts.frontendUser.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('content')
    <div class="container-fluid mt-1">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="{{ url('frontendUser/images/hero.jpg') }}"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ url('frontendUser/images/hero.jpg') }}"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ url('frontendUser/images/hero.jpg') }}"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <div class="container-fluid mt-5">
      <div class="card">
        <div class="card-header bg-success card-judul text-center">
          Grafik Responden Alumni
        </div>
        <div class="card-body">
          <canvas
            id="donutChart"
            style="
              min-height: 250px;
              height: 250px;
              max-height: 250px;
              max-width: 100%;
            "
          ></canvas>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')    
    <script src="{{ url('/frontendUser/libraries/chart/Chart.min.js') }}"></script>    
    <script>
      $(function () {
        var donutChartCanvas = $("#donutChart").get(0).getContext("2d");
        var donutData = {
          labels: [
            "2015", 
            "2016",
            "2017"
          ],
          datasets: [
            {
              data: [
                  10, 
                  50,
                  100
              ],
              backgroundColor: [
                "#f56954",
                "#00a65a",
                "#f39c12",
                "#00c0ef",
                "#3c8dbc",
                "#d2d6de",
              ],
            },
          ],
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