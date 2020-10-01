@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                               <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Edit Data Pengumuman
                                    </h3>
                                </div>
@endsection

@section('content')
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Judul</label>
                                                            <input 
                                                                type="text" 
                                                                name="title" 
                                                                class="form-control"
                                                                value="Pendaftar siswa-siswa baru 2020/2021">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Slug</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control" 
                                                                name="slug"
                                                                value="daftar-siswa-baru"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Thumbnail</label>
                                                            <input type="file" class="form-control" name="photo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Deskripsi</label>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" 
                                                                rows="3"
                                                                name="description"
                                                            >aaaaaaaaaaaaaaaaaaaa</textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
                                                </div>
                                            </form>
                                        </div>                                                                          
@endsection