@extends('admin.layouts.master')
@section('title','Services')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Services</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Services</h4>
              <div class="card-header-action">
                <a href="{{route('admin.service.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
