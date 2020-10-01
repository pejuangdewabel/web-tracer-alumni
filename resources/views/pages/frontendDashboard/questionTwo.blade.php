@extends('layouts.frontendDashboard.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@push('addon-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />
@endpush

@section('header')
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                <h3 class="text-center"><strong>Halaman Quisioner</strong></h3>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Biodata Diri</p>
                                    </li>
                                    <li class="page-item active">
                                        <p class="page-link" href="#">Form Kegiatan Saat SMA</p>
                                    </li>
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Setelah Lulus SMA</p>
                                    </li>
                                    <li class="page-item">
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
                                        <i class="fas fa-chalkboard"></i> Data Diri Saat SMA
                                    </h3>
                                </div>              
@endsection

@section('content')
                                        <section class="content">
                                            <div class="container-fluid">
                                                <form action="" method="">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Masuk</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_masuk"
                                                                    placeholder="Tahun Masuk SMA" 
                                                                    maxlength="4"
                                                                    minlength="4" 
                                                                    id="datepicker">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Lulus</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahun_lulus"
                                                                    placeholder="Tahun Lulus SMA" 
                                                                    maxlength="4"
                                                                    minlength="4" 
                                                                    id="datepicker2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Jurusan SMA</label>
                                                                <select name="jurusan" id="jurusan"
                                                                    class="form-control">
                                                                    <option value="">--Pilih--</option>
                                                                    <option value="ipa">IPA</option>
                                                                    <option value="ips">IPS</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Pilih Organisasi / Ekstrakulikuler</label>
                                                                <span class="badge badge-warning">Yang paling sering
                                                                    diikuti</span>
                                                                <select class="form-control" name="organisasi">
                                                                    <option value="" selected="selected">--Pilih--
                                                                    </option>
                                                                    <option value="Menulis">Menulis</option>
                                                                    <option value="Traveling">Traveling</option>
                                                                    <option value="Otomotif">Otomotif</option>
                                                                    <option value="Fotografi">Fotografi</option>
                                                                    <option value="Programming">Programming</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <button type="submit"
                                                            class="btn btn-primary w-100 mt-3 btn-pertanyaan">
                                                            SIMPAN & LANJUTKAN
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </section>                         
@endsection

@push('addon-script')   
    <!-- Page script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script>
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
        $("#datepicker2").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
        $("#datepicker3").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
        $("#datepicker4").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
        $("#datepicker5").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });        
    </script>
    
@endpush