@extends('layouts.template')

@section('head.title')
    Dashboard
@endsection

@section('title')
    Dashboard
@endsection
@section('content')
<div class="container">
    <div class="card card-success">
          <div class="card-body">
            <div class="row">
                @foreach($estados as $estado)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" src="{{ $estado->url_path }}" alt="Dist Photo 1">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">{{ $estado->name }}</h5>
                            <p class="card-text text-white pb-2 pt-1">{{ $estado->short_desc }}</p>
                            <a href="{{ route('estados.show', $estado->id) }}" class="text-white">Last update 2 mins ago</a>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
</div>
@endsection
