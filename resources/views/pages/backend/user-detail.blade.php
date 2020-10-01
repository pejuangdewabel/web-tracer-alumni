@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')  
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Data User 
                                    </h3>
                                </div>                                                 
@endsection

@section('content')
                                        <h4>Biodata</h4>
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        aria-describedby="storeHelp"
                                                        name="username"
                                                        id="username"
                                                        value="aaaaa"
                                                        readonly                                                        
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="name"
                                                        id="name"
                                                        value="aaaaaaaaaaaa"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="email"
                                                        id="name"
                                                        value="aaa@gmail.com"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="jk"
                                                        id="jk"
                                                        value="Laki-Laki"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="tmpt_lahir"
                                                        id="tmpt_lahir"
                                                        value="Jakarta"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="tgl_lahir"
                                                        id="tgl_lahir"
                                                        value="27 Januari 2020"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="agama"
                                                        id="agama"
                                                        value="Islam"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">No Telepon</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="no_telp"
                                                        id="no_telp"
                                                        value="081999999999"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Akses</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="akses"
                                                        id="akses"
                                                        value="USER"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status Kegiatan</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="status"
                                                        id="status"
                                                        value="Bekerja dan Pendidikan"
                                                        readonly
                                                    >
                                                </div>
                                            </div>                                                                                        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Tahun Masuk SMA</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="thn_masuk"
                                                        id="thn_masuk"
                                                        value="2015"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Tahun Lulus SMA</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="thn_lulus"
                                                        id="thn_lulus"
                                                        value="2018"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Jurusan SMA</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="jurusan"
                                                        id="jurusan"
                                                        value="IPS"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Organisasi</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="organisasi"
                                                        id="organisasi"
                                                        value="Pramuka"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <textarea 
                                                        name="alamat" 
                                                        id="alamat"                                                         
                                                        rows="3"
                                                        class="form-control"
                                                        readonly
                                                    >Jalan Cinta Gg. Sayang</textarea>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Tahun Masuk Kerja</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="thn_masuk_kerja"
                                                        id="thn_masuk_kerja"
                                                        value="2020"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Range Gaji</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="gaji"
                                                        id="gaji"
                                                        value="> 1Juta"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Jabatan</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="jabatan"
                                                        id="jabatan"
                                                        value="CO FOUNDER"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Nama Perusahaan</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="nama_perusahaan"
                                                        id="nama_perusahaan"
                                                        value="Juara Coding"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Alamat Perusahaan</label>
                                                    <textarea 
                                                        name="nama_perusahaan" 
                                                        id="nama_perusahaan"                                                         
                                                        rows="3"
                                                        class="form-control"
                                                        readonly
                                                    >Jl. Oto Iskandardinata</textarea>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Tahun Kuliah</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="tahun_masuk_kuliah"
                                                        id="tahun_masuk_kuliah"
                                                        value="2016"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Tahun Lulus</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="tahun_lulus_kuliah"
                                                        id="tahun_lulus_kuliah"
                                                        value="2020"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Strata</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="strata"
                                                        id="strata"
                                                        value="S1"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jurusan</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="jurusan"
                                                        id="jurusan"
                                                        value="Sistem Informasi"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Nama Kampus</label>
                                                    <input 
                                                        type="text"
                                                        class="form-control"
                                                        name="nama_kampus"
                                                        id="nama_kampus"
                                                        value="Universitas Teknokrat Indonesia"
                                                        readonly
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Alamat Kampus</label>
                                                    <textarea 
                                                        name="alamat_kampus" 
                                                        id="alamat_kampus"                                                         
                                                        rows="3"
                                                        class="form-control"
                                                        readonly
                                                    >Jl. Zainal Abidin Pagar Alam</textarea>                                                    
                                                </div>
                                            </div>
                                            <a href="{{ route('user-admin') }}" class="btn btn-primary w-100">KEMBALI</a>
                                        </div>
@endsection