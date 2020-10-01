@extends('layouts.frontendUser.app')

@section('title','Tracer Alumni | SMAN 13 Bandar Lampung')

@section('content')
    <!-- This is Header -->
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <h3>Detail Berita ....</h3>
        </div>
      </div>     
    </div>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h6></h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info text-white">
                <h4 class="card-title text-center">
                  SMAN 13 Bandar Lampung Menjuarai Karate Nasional
                </h4>
              </div>
              <div class="card-body text-justify">
                <img 
                  src="{{ url('frontendUser/images/hero.jpg') }}" 
                  class="rounded mx-auto d-block mt-3 mb-5 img-detail" 
                  style="max-height:500px"
                >
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                  lacinia nunc at egestas viverra. Donec quis neque elit.
                  Pellentesque diam nulla, tempus at fringilla pretium,
                  fringilla at velit. Etiam et facilisis lorem, ultrices semper
                  leo.
                </p>                
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
@endsection