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
                                                            <th>Email</th>
                                                            <th>Username</th>
                                                            <th>Nama</th>
                                                            <th>Akses</th>
                                                            <th>Status Kegiatan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>obama@gmail.com</td>
                                                            <td>obama123</td>
                                                            <td>Muhammad Obama</td>
                                                            <td>Admin</td>
                                                            <td>Kerja</td>                                                            
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-warning-w dropdown-toggle"
                                                                        type="submit" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Pilih Aksi
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a href="/user-detail.html" class="dropdown-item">
                                                                            <i class="fas fa-info-circle"></i>
                                                                            <strong>Detail</strong>
                                                                        </a>
                                                                        <a href="/user-ubah.html" class="dropdown-item">
                                                                            <i class="fas fa-edit"></i>
                                                                            <strong>Ubah</strong>
                                                                        </a>
                                                                        <a 
                                                                            href="" 
                                                                            class="dropdown-item" 
                                                                            onclick="return confirm('Apakah Anda Yakin untuk Menghapus');"
                                                                        >
                                                                            <i class="fas fa-trash-alt"></i>
                                                                            <strong>Hapus</strong>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>     
                                        
                                        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password">
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
                "autoWidth": false,
            });
        });       
    </script>
@endpush