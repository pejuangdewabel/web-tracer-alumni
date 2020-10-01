@extends('layouts.frontendDashboard.success')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('content')
    <main data-aos="zoom-in" data-aos-duration="800">
      <div class="section-success d-flex align-items-center">
          <div class="col text-center">
              <img src="{{ url('frontendDashboard/images/enrollment.png') }}" alt="" srcset="">
              <h1>Hore Sukses</h1>
              <p>
                  Selamat Anda Telah Menyelesaikan
                  <br>
                  Kuisioner dengan baik
              </p>
              <a href="{{ route('dashboard-user') }}" class="btn btn-home-page mt-5 px-5">
                  Kembali ke Dashboard
              </a>
          </div>
      </div>
  </main>
@endsection