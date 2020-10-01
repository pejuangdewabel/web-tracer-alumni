@extends('layouts.frontendDashboard.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('judul')
                <div class="card-header coverjudul">
                  <h3 class="card-title welcome">
                    <i class="fas fa-chalkboard"></i> | Selamat Datang di
                    Website Tracer Alumni
                  </h3>
                  <br />
                  <h6 class="mt-2">
                    <strong>SMA N 13 Bandar Lampung</strong>
                  </h6>
                </div>
@endsection

@section('content')
                    <section class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <div class="card card-danger">
                              <div class="card-header">
                                <h3 class="card-title">
                                  Tata Cara Pengisian Tracer Alumni
                                </h3>
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-6">
                                    <ul class="list-group">
                                      <li class="list-group-item disabled bg-info" aria-disabled="true">A. Memulai
                                        Pengisian</li>
                                      <li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Nulla eu lacinia augue. Sed finibus, nunc et bibendum porta, odio metus
                                        maximus sapien, sed rhoncus arcu massa vel dui</li>
                                      <li class="list-group-item">Morbi leo risus</li>
                                      <li class="list-group-item">Porta ac consectetur ac</li>
                                      <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                  </div>
                                  <div class="col-6">
                                    <ul class="list-group">
                                      <li class="list-group-item disabled bg-info" aria-disabled="true">B. Memulai
                                        Pengisian</li>
                                      <li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Nulla eu lacinia augue. Sed finibus, nunc et bibendum porta, odio metus
                                        maximus sapien, sed rhoncus arcu massa vel dui</li>
                                      <li class="list-group-item">Morbi leo risus</li>
                                      <li class="list-group-item">Porta ac consectetur ac</li>
                                      <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.container-fluid -->
                    </section>
@endsection