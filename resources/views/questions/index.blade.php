@extends('layouts.template')
@section('head.title')
    Comienza tu Viaje
@endsection
@section('title')
    Comienza tu Viaje
@endsection

@section('content')
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Comienza tu viaje</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row row-cols-1" >
                <form method="POST" action="{{ route('questions.store') }}" enctype="multipart/form-data">
                    @include('questions.partials.form')
                    <button type="submit" class="btn btn-primary" >Guardar cambios</button>
                </form>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
        <!-- /.card -->
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection


