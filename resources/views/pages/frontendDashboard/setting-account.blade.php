@extends('layouts.frontendDashboard.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Setting Akun
                                    </h3>
                                    <br />
                                    <h6 class="mt-2">

                                    </h6>
                                </div>
@endsection

@section('content')
                                      <section class="content">
                                            <img src="{{ url('frontendDashboard/images/woman.jpg') }}" class="img-thumbnail" alt="...">
                                            <form action="" class="mt-3">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" disabled name="email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Jenis Kelamin</label>
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="L">Laki - Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" name="place_birth" class="form-control"
                                                            placeholder="Tempat Lahir" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="date" name="date_birth" id="date_birth"
                                                            class="form-control" value="2020-08-23" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Agama</label>
                                                        <select name="religion" id="religion" class="form-control">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="islam">Islam</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Protestan">Protestan</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">No Telp (WA)</label>
                                                        <input type="text" class="form-control" name="phone_number"
                                                            id="phone_number" maxlength="12" minlength="10"
                                                            placeholder="No Telp (WA)">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Akses</label>
                                                        <input type="text" class="form-control" name="akses">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">Alamat</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                                                    </div>
                                                    <button 
                                                        type="submit"
                                                        class="btn btn-primary w-100 mt-3 btn-pertanyaan"
                                                    >
                                                        Ubah Data
                                                    </button>
                                                </div>
                                            </form>
                                      </section>
@endsection