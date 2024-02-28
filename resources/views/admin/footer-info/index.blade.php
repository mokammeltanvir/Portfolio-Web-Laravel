@extends('admin.layouts.master')
@section('title','Footer Information')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Footer Information</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Update Footer Info</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.footer-info.update',1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Info</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea name="info" id="" class="form-control" style="height: 100px">{{$footerInfo->info}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Copy right</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="copy_right" class="form-control" value="{{$footerInfo->copy_right}}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Powered by</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="powered_by" class="form-control" value="{{$footerInfo->powered_by}}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
