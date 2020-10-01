@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Data Responden
                                    </h3>
                                </div>               
@endsection

@section('content')
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped table-hover">                                                    
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>                                                            
                                                            <th>User</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Bella</td>                                                            
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
                                                                        <a href="/responden-detail.html" class="dropdown-item">
                                                                            <i class="fas fa-edit"></i>
                                                                            <strong>Detail</strong>
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