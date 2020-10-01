@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Ubah Password
                                    </h3>
                                </div>           
@endsection

@section('content')
                                        <section class="content">                                            
                                            <form action="" class="mt-3">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Password Lama</label>
                                                        <input type="password" class="form-control" name="password1">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Password Baru</label>
                                                        <input type="password" class="form-control" name="password">
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