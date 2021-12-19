@extends('layouts.template')

@section('head.title')
    Estado
@endsection

@section('title')
    Estado
@endsection
@section('content')
<div class="container">
    <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{ $estado->name }}</h3>
              <div class="col-12">
                <img src="{{ $estado->url_path }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $estado->name }}</h3>
              <p>{{ $estado->short_desc }}</p>

              <hr>

              <div class="mt-4">

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Agregar a la Wish List
                </div>
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-star"></i>
                  Calificacion: {{ $estado->rating }} /5
                </div>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripcion</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Sitios</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Gastronomia</a>
                  <a class="nav-item nav-link" id="product-activity-tab" data-toggle="tab" href="#product-activity" role="tab" aria-controls="product-rating" aria-selected="false">Actividades</a>
              </div>


            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$estado->description}} </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> {{ $estado->sites }} </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> {{ $estado->gastronomy }} </div>
                <div class="tab-pane fade" id="product-activity" role="tabpanel" aria-labelledby="product-activity-tab"> {{ $estado->activity }} </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@endsection
