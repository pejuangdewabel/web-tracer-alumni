@extends('layouts.backend.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                                <div class="card-header coverjudul">
                                    <h3 class="card-title welcome">
                                        <i class="fas fa-chalkboard"></i> | Data User .....
                                    </h3>
                                </div>
@endsection

@section('content')
                                        <div class="table-responsive">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item bg-info"><strong>Nama User :</strong></li>
                                                <li class="list-group-item bg-warning"><strong>Bella</strong></li>                                                
                                            </ul>                                            
                                            <table class="table table-hover mt-3">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Kuisioner</th>
                                                        <th scope="col">Jawaban</th>                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Apakah sudah bagus ?</td>
                                                        <td>
                                                            <span class="badge badge-pill badge-success">Sangat Baik</span>
                                                        </td>                                                        
                                                    </tr>                                                   
                                                </tbody>
                                            </table>
                                            <a href="/responden.html" class="btn btn-primary">Kembali</a>                                            
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