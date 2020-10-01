@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@push('addon-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />
@endpush

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Data User Edit
                                    </h3>
                                </div>
@endsection

@section('content')
                                        <form action="" method="POST">
                                            <h4>Biodata</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control"
                                                            aria-describedby="storeHelp" name="username" id="username"
                                                            value="aaaaa">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="name" id="name"
                                                            value="aaaaaaaaaaaa">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="text" class="form-control" name="email" id="name"
                                                            value="aaa@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jk">Jenis Kelamin</label>
                                                        <select name="jk" id="jk" class="form-control">
                                                            <option value="1">Laki-Laki</option>
                                                            <option value="0" selected>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tmpt_lahir"
                                                            id="tmpt_lahir" value="Jakarta">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tgl_lahir"
                                                            id="tgl_lahir" value="2020-01-17">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Agama</label>
                                                        <select name="agama" id="agama" class="form-control">
                                                            <option value="islam">Islam</option>
                                                            <option value="protestan">Protestan</option>
                                                            <option value="katolik">Katolik</option>
                                                            <option value="hindu">hindu</option>
                                                            <option value="buddha" selected>Buddha</option>
                                                            <option value="konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telp"
                                                            id="no_telp" value="081999999999">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Akses</label>
                                                        <select name="akses" id="akses" class="form-control">
                                                            <option value="1">ADMIN</option>
                                                            <option value="2" selected>USER</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Status Kegiatan</label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="1">BEKERJA</option>
                                                            <option value="2">PENDIDIKAN</option>
                                                            <option value="3" selected>BEKERJA & PENDIDIKAN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Tahun Masuk SMA</label>
                                                        <input type="text" id="datepicker" class="form-control"
                                                            name="thn_masuk" value="2012">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Tahun Lulus SMA</label>
                                                        <input type="text" class="form-control" name="thn_lulus"
                                                            value="2018" id="datepicker2">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Jurusan SMA</label>
                                                        <select name="jurusan" id="jurusan" class="form-control">
                                                            <option value="ips">IPS</option>
                                                            <option value="ipa" selected>IPA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Organisasi</label>
                                                        <select name="organisasi" id="organisasi" class="form-control">
                                                            <option value="1">OSIS</option>
                                                            <option value="2" selected>PRAMUKA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Alamat</label>
                                                        <textarea name="alamat" id="alamat" rows="3"
                                                            class="form-control">Jalan Cinta Gg. Sayang</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Tahun Masuk Kerja</label>
                                                        <input type="text" class="form-control" name="thn_masuk_kerja"
                                                            id="datepicker3" value="2020">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Range Gaji</label>
                                                        <select name="gaji" id="gaji" class="form-control">
                                                            <option value="1">
                                                                < 1 Juta</option> <option value="2">1 Juta - 5 Juta
                                                            </option>
                                                            <option value="3">5 juta - 10 Juta</option>
                                                            <option value="3" selected>> 10 Juta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan"
                                                            id="jabatan" value="CO FOUNDER">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Nama Perusahaan</label>
                                                        <input type="text" class="form-control" name="nama_perusahaan"
                                                            id="nama_perusahaan" value="Juara Coding">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Alamat Perusahaan</label>
                                                        <textarea name="nama_perusahaan" id="nama_perusahaan" rows="3"
                                                            class="form-control">Jl. Oto Iskandardinata</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Tahun Kuliah</label>
                                                        <input type="text" class="form-control"
                                                            name="tahun_masuk_kuliah" id="datepicker4" value="2016">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Tahun Lulus</label>
                                                        <input type="text" class="form-control"
                                                            name="tahun_lulus_kuliah" id="datepicker5" value="2020">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Strata</label>
                                                        <select name="strata" id="strata" class="form-control">
                                                            <option value="">--Pilih Strata--</option>
                                                            <option value="d1">D-1</option>
                                                            <option value="d2">D-2</option>
                                                            <option value="d3">D-3</option>
                                                            <option value="d4">D-4</option>
                                                            <option value="s1">S-1</option>
                                                            <option value="s2">S-2</option>
                                                            <option value="s3" selected>S-3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Jurusan</label>
                                                        <input type="text" class="form-control" name="jurusan"
                                                            id="jurusan" value="Sistem Informasi">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Nama Kampus</label>
                                                        <input type="text" class="form-control" name="nama_kampus"
                                                            id="nama_kampus" value="Universitas Teknokrat Indonesia">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Alamat Kampus</label>
                                                        <textarea name="alamat_kampus" id="alamat_kampus" rows="3"
                                                            class="form-control">Jl. Zainal Abidin Pagar Alam</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
                                            </div>
                                        </form>
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