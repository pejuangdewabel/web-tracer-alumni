@extends('layouts.frontendDashboard.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

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
                                    <li class="page-item active">
                                        <p class="page-link" href="#">Form Biodata Diri</p>
                                    </li>
                                    <li class="page-item">
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
                                        <i class="fas fa-chalkboard"></i> Silahkan Masukkan
                                        Biodata Diri
                                    </h3>
                                </div>
@endsection

@section('content')
                                        <section class="content">
                                            <div class="container-fluid">
                                                <form action="" method="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Lengkap</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" placeholder="Nama Lengkap" />
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Jenis Kelamin</label>
                                                                <select name="gender" id="gender" class="form-control">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="L">Laki - Laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Tempat Lahir</label>
                                                                <input type="text" name="place_birth"
                                                                    class="form-control" placeholder="Tempat Lahir" />
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Tanggal Lahir</label>
                                                                <input type="date" name="date_birth" id="date_birth"
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Agama</label>
                                                                <select name="religion" id="religion"
                                                                    class="form-control">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="islam">Islam</option>
                                                                    <option value="Katolik">Katolik</option>
                                                                    <option value="Protestan">Protestan</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Buddha">Buddha</option>
                                                                    <option value="Konghucu">Konghucu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">No Telp (WA)</label>
                                                                <input type="text" class="form-control"
                                                                    name="phone_number" id="phone_number" maxlength="12"
                                                                    minlength="10" placeholder="No Telp (WA)">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" class="form-control" name="email"
                                                                    id="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Alamat</label>
                                                                <textarea name="address"></textarea>
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
    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("address");
    </script>
@endpush