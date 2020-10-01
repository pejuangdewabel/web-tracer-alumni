@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Detail Data Pengumuman
                                    </h3>
                                </div>                             
@endsection

@section('content')
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="text-center">
                                                            <img 
                                                                src="{{ Storage::url($pengumuman->photo) }}" 
                                                                class="img-thumbnail photo-announcement mb-3" 
                                                                alt="..."                                                                
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Judul</label>
                                                            <input type="text" name="title" class="form-control"
                                                                value="{{ $pengumuman->title }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Slug</label>
                                                            <input type="text" class="form-control" name="slug"
                                                                value="{{ $pengumuman->slug }}" readonly>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Deskripsi</label>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" rows="20"
                                                                name="description"
                                                                readonly>{{ $pengumuman->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('data-pengumuman.index') }}" class="btn btn-primary w-100">KEMBALI</a>
                                                </div>
                                            </form>
                                        </div>                               
@endsection