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
                                        <div class="container-fluid">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <form 
                                                action="{{ route('data-pengumuman.update', $pengumuman->id) }}"
                                                method="POST"
                                                enctype="multipart/form-data"
                                            >
                                                @method('PUT')
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Judul</label>
                                                            <input 
                                                                type="text" 
                                                                name="title" 
                                                                class="form-control"
                                                                value="{{ $pengumuman->title }}"
                                                                required
                                                            >
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Thumbnail</label>
                                                            <input type="file" class="form-control" name="photo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Isi Berita</label>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" 
                                                                rows="20"
                                                                style="max-height: 100%"                                                                
                                                                name="description"
                                                                required
                                                            >{{ $pengumuman->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
                                                </div>
                                            </form>
                                        </div>                 
@endsection