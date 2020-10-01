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
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Biodata Diri</p>
                                    </li>
                                    <li class="page-item">
                                        <p class="page-link" href="#">Form Kegiatan Saat SMA</p>
                                    </li>
                                    <li class="page-item active">
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
                                        <i class="fas fa-chalkboard"></i> Data Diri Setelah Lulus SMA
                                    </h3>
                                </div>          
@endsection

@section('content')
                                        <div class="app">
                                            <h6><strong>Apakah anda saat ini sedang ?</strong></h6>
                                            <div class="row">
                                                <div class="form-group clearfix ml-3 col-sm-12">
                                                    <div class="icheck-primary d-inline mr-3">
                                                        <input type="radio" id="radio1" name="r1"
                                                            v-on:click="getPosisiBekerja()">
                                                        <label for="radio1">
                                                            <strong>Sedang Bekerja</strong>
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline mr-3 col-sm-12">
                                                        <input type="radio" id="radio2" name="r1"
                                                            v-on:click="getPosisiKuliah()">
                                                        <label for="radio2">
                                                            Sedang Pendidikan
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline col-sm-12">
                                                        <input type="radio" id="radio3" name="r1"
                                                            v-on:click="getPosisiKuliahKerja()">
                                                        <label for="radio3">
                                                            Sedang Pendidikan & Bekerja
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="container" v-if="posisi === 'bekerja'">
                                                <h5>Form Sedang Bekerja</h5>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Tahun Masuk</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunbekerja" :value="tahunbekerja"
                                                                    v-model="tahunbekerja" id="datepicker">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Range Gaji</label>
                                                                <select 
                                                                    class="form-control"
                                                                    name="gaji" 
                                                                    id="gaji"
                                                                    v-model="gaji"
                                                                >
                                                                    <option value="1">< 1 Juta</option>
                                                                    <option value="2">1 Juta - 5 Juta</option>
                                                                    <option value="3">5 juta - 10 Juta</option>
                                                                    <option value="3">> 10 Juta</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Jabatan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jabatanbekerja" :value="jabatanbekerja"
                                                                    v-model="jabatanbekerja">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Perusahaan</label>
                                                                <input type="text" class="form-control"
                                                                    name="namaperusahaan" :value="namaperusahaan"
                                                                    v-model="namaperusahaan">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Alamat Perusahaan
                                                                    </label>
                                                                <textarea class="form-control" name="alamatperusahaan"
                                                                    :value="alamatperusahaan" v-model="alamatperusahaan"
                                                                    cols="3" rows="3">

                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="container" v-else-if="posisi === 'kuliah'">
                                                <h5>Form Sedang Pendidikan</h5>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Masuk</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunkuliah" :value="tahunkuliah"
                                                                    v-model="tahunkuliah">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Lulus</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunlulus" :value="tahunlulus"
                                                                    v-model="tahunlulus">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Strata Pendidikan</label>
                                                                <select 
                                                                    name="strata"
                                                                    class="form-control"
                                                                    v-model="strata"
                                                                >
                                                                    <option value="">--Pilih Strata--</option>
                                                                    <option value="d1">D-1</option>
                                                                    <option value="d2">D-2</option>
                                                                    <option value="d3">D-3</option>
                                                                    <option value="d4">D-4</option>
                                                                    <option value="s1">S-1</option>
                                                                    <option value="s2">S-2</option>
                                                                    <option value="s3">S-3</option>
                                                                </select>                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Jurusan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jurusan" :value="jurusan"
                                                                    v-model="jurusan">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Kampus</label>
                                                                <input type="text" class="form-control"
                                                                    name="namakampus" :value="namakampus"
                                                                    v-model="namakampus">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Alamat Kampus</label>
                                                                <textarea class="form-control" name="alamatkampus"
                                                                    :value="alamatkampus" v-model="alamatkampus"
                                                                    cols="3" rows="3">
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="container" v-else-if="posisi === 'kuliahKerja'">
                                                <h5>Form Sedang Bekerja</h5>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Tahun Masuk</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunbekerja" :value="tahunbekerja"
                                                                    v-model="tahunbekerja" id="tahunbekerja">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Range Gaji</label>
                                                                <select 
                                                                    class="form-control"
                                                                    name="gaji" 
                                                                    id="gaji"
                                                                    v-model="gaji"
                                                                >
                                                                    <option value="1">< 1 Juta</option>
                                                                    <option value="2">1 Juta - 5 Juta</option>
                                                                    <option value="3">5 juta - 10 Juta</option>
                                                                    <option value="3">> 10 Juta</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Jabatan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jabatanbekerja" :value="jabatanbekerja"
                                                                    v-model="jabatanbekerja">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Perusahaan</label>
                                                                <input type="text" class="form-control"
                                                                    name="namaperusahaan" :value="namaperusahaan"
                                                                    v-model="namaperusahaan">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Alamat Perusahaan</label>
                                                                <textarea class="form-control" name="alamatperusahaan"
                                                                    :value="alamatperusahaan" v-model="alamatperusahaan"
                                                                    cols="3" rows="3">

                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-12">
                                                            <h5>Form Sedang Kuliah</h5>
                                                        </div>                                                                                                                
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Masuk</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunkuliah" :value="tahunkuliah"
                                                                    v-model="tahunkuliah">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Tahun Lulus</label>
                                                                <input type="text" class="form-control"
                                                                    name="tahunlulus" :value="tahunlulus"
                                                                    v-model="tahunlulus">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="">Strata Pendidikan</label>
                                                                <select 
                                                                    name="strata"
                                                                    class="form-control"
                                                                    v-model="strata"
                                                                >
                                                                    <option value="">--Pilih Strata--</option>
                                                                    <option value="d1">D-1</option>
                                                                    <option value="d2">D-2</option>
                                                                    <option value="d3">D-3</option>
                                                                    <option value="d4">D-4</option>
                                                                    <option value="s1">S-1</option>
                                                                    <option value="s2">S-2</option>
                                                                    <option value="s3">S-3</option>
                                                                </select>                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Jurusan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jurusan" :value="jurusan"
                                                                    v-model="jurusan">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Kampus</label>
                                                                <input type="text" class="form-control"
                                                                    name="namakampus" :value="namakampus"
                                                                    v-model="namakampus">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Alamat Kampus</label>
                                                                <textarea class="form-control" name="alamatkampus"
                                                                    :value="alamatkampus" v-model="alamatkampus"
                                                                    cols="3" rows="3">
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12" v-else>
                                                        <div class="alert alert-danger" role="alert">
                                                            Anda Belum Memilih
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                         
@endsection

@push('addon-script')       
   <!-- Vue JS -->
    <script src="{{ url('frontendDashboard/libraries/vue/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
        Vue.use(Toasted);
        const vm = new Vue({
            el: '.app',
            data: {
                posisi: '',
                statusKegiatan: '',
                tahunbekerja: '',
                jabatanbekerja: '',
                namaperusahaan: '',
                alamatperusahaan: '',
                gaji: 0,
                id: 0,
                tahunkuliah:'',
                tahunlulus:'',
                strata:'',
                jurusan:'',
                namakampus:'',
                alamatkampus:'',                
            },
            methods: {
                getPosisiBekerja() {
                    this.posisi = 'bekerja',
                        this.statusKegiatan = 1,
                        this.$toasted.success(
                            "Anda Memilih sedang Bekerja", {
                                position: "top-center",
                                className: "rounded",
                                duration: 500
                            }
                        );
                },
                getPosisiKuliah() {
                    this.posisi = 'kuliah',
                        this.statusKegiatan = 2,
                        this.$toasted.success(
                            "Anda Memilih sedang Kuliah", {
                                position: "top-center",
                                className: "rounded",
                                duration: 500,
                            }
                        );
                },
                getPosisiKuliahKerja() {
                    this.posisi = 'kuliahKerja',
                        this.statusKegiatan = 3,
                        this.$toasted.success(
                            "Anda Memilih sedang Kuliah dan Bekerja", {
                                position: "top-center",
                                className: "rounded",
                                duration: 500,
                            }
                        );
                }
            },
        })
    </script>   
@endpush