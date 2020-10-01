@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Data Berita
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
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped table-hover">
                                                    <button type="button" class="btn btn-primary mb-3"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fas fa-plus"></i>
                                                        Tambah Data
                                                    </button>
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Judul</th>
                                                            <th>Slug</th>
                                                            <th>Foto Thumbnail</th>                                                            
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @forelse ($berita as $b)
                                                            <tr>
                                                                <th>{{ $no++ }}</th>
                                                                <th>{{ $b->title }}</th>
                                                                <th>{{ $b->slug }}</th>
                                                                <th>
                                                                    @if ($b->photo)
                                                                        <img 
                                                                            src="{{ Storage::url($b->photo) }}" 
                                                                            alt="" 
                                                                            srcset=""
                                                                            class="photo-announcement"
                                                                            style="max-height: 10%">   
                                                                    @else
                                                                        Tidak Ada                                
                                                                    @endif
                                                                </th>                                                                
                                                                <th>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-warning-w dropdown-toggle"
                                                                            type="submit" id="dropdownMenuButton"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            Pilih Aksi
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a href="" class="dropdown-item">
                                                                                <i class="fas fa-info-circle"></i>
                                                                                <strong>Detail</strong>
                                                                            </a>
                                                                            <a href="{{ route('data-berita.edit', $b->id) }}" class="dropdown-item">
                                                                                <i class="fas fa-edit"></i>
                                                                                <strong>Ubah</strong>
                                                                            </a>
                                                                            <form 
                                                                                action="{{ route('data-berita.destroy', $b->id) }}"
                                                                                method="POST"
                                                                                class="d-inline"
                                                                            >
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button 
                                                                                    class="dropdown-item"
                                                                                    onclick="return confirm('Apakah Anda Yakin untuk Menghapus');"
                                                                                >
                                                                                     <i class="fas fa-trash-alt"></i>
                                                                                    <strong>Hapus</strong>
                                                                                </button>
                                                                            </form>                                                                            
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        @empty
                                                            <th>---</th>
                                                            <th>---</th>
                                                            <th>---</th>
                                                            <th>---</th>
                                                            <th>---</th>                                                            
                                                        @endforelse

                                                        {{-- <tr>
                                                            <td>1</td>
                                                            <td>Pendaftar siswa-siswa baru 2020/2021</td>
                                                            <td>daftar-siswa-baru</td>
                                                            <td>
                                                                <img src="{{ url('backend/images/user/enrollment.png') }}" alt="" srcset=""
                                                                    class="photo-announcement">
                                                            </td>
                                                            <td>
                                                                
                                                            </td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> 
                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form 
                                                    action="{{ route('data-berita.store') }}" 
                                                    method="POST" 
                                                    enctype="multipart/form-data"
                                                >
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Berita</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Judul Berita</label>
                                                                        <input type="text" class="form-control" name="title" required>
                                                                    </div>
                                                                </div>                                                                
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Foto Thumbnail</label>
                                                                        <input type="file" class="form-control" name="photo" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Isi Berita</label>
                                                                        <textarea 
                                                                            class="form-control" 
                                                                            id="exampleFormControlTextarea1" 
                                                                            rows="3"
                                                                            name="description"
                                                                            required
                                                                        ></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
@endsection

@push('addon-script')
     <!-- DataTables -->
    <script src="{{ url('backend/vendor/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('backend/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <!-- Page script -->
    <script>
        $(function () {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,                
                "autoWidth": true,
            });
        });       
    </script>
@endpush