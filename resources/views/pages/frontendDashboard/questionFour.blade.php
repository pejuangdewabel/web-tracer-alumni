@extends('layouts.frontendDashboard.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('header')
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                <h3 class="text-center">
                                    <strong>Halaman Quisioner</strong>
                                </h3>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Biodata Diri</p>
                                    </li>
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Kegiatan Saat SMA</p>
                                    </li>
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Setelah Lulus SMA</p>
                                    </li>
                                    <li class="page-item active">
                                        <p class="page-link" href="#">Form Quisioner</p>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
@endsection

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> Formulir Kuisioner
                                    </h3>
                                </div>          
@endsection

@section('content')
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="col-lg-12">
                                                    <div class="page-header">

                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="table-responsive-sm">
                                                        <form action="" method="POST">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Kuisioner</th>
                                                                        <th>Jawaban</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Apakah Yang dimaksud dengan Vue JS ?</td>
                                                                        <td>
                                                                            <select name="jawaban[]" id="" class="form-control"
                                                                                required>
                                                                                <option value="">--Pilih Jawaban--
                                                                                </option>
                                                                                <option value="1">Baik Sekali</option>
                                                                                <option value="2">Baik</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="4">Buruk</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Apakah Yang dimaksud dengan Vue JS ?</td>
                                                                        <td>
                                                                            <select name="jawaban[]" id="" class="form-control" required> 
                                                                                <option value="">--Pilih Jawaban--</option>
                                                                                <option value="1">Baik Sekali</option>
                                                                                <option value="2">Baik</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="4">Buruk</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <hr>
                                                            <button type="submit" class="btn btn-primary w-100">
                                                                Kirim
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </section>                       
@endsection