@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Edit Data Berita
                                    </h3>
                                </div>              
@endsection

@section('content')
                                <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="">Pertanyaan</label>
                                                            <input 
                                                                type="text" 
                                                                name="pertanyaan" 
                                                                class="form-control"
                                                                value="Apakah pelayanan akademik sudah baik ?">
                                                        </div>
                                                    </div>                                                                                                                                                           
                                                    <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
                                                </div>
                                            </form>
                                        </div>
@endsection
