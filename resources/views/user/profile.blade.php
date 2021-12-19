@extends('layouts.template')
@section('head.title')
    Perfil
@endsection
@section('title')
    Perfil
@endsection

@section('content')
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Perfil</h3>
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
                <form method="POST" action="{{ route('profile.update', $usuario->id, $edit=true) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @include('user.partials.form')
{{--                    @can('is-admin')--}}
{{--                    @endcan--}}
{{--                    @can('is-employee')--}}
{{--                    @endcan--}}
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
@endsection


