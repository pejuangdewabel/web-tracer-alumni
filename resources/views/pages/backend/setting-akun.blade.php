@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Setting User
                                    </h3>
                                </div>   
@endsection

@section('content')
                                        <section class="content">
                                            <img src="{{ url('backend/images/user/profile2.png') }}" class="img-thumbnail" alt="...">
                                            <form action="" class="mt-3">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" name="email" value="admin@admin.com">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="name" value="Admin">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Akses</label>
                                                        <input type="text" class="form-control" name="akses" value="ADMIN" readonly>
                                                    </div>   
                                                    <div class="form-group col-md-6">
                                                        <label for="">Foto Profile</label>
                                                        <input type="file" class="form-control" name="photo">
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