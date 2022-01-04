@extends('admin.master')
@push('post_styles')
<link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">

@endpush


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-10">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Student Profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Campus ID</label>
                  <input type="text" class="form-control" name="campus_id" id="exampleInputEmail1" placeholder="Enter ID">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Enter Name">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Profile Picture</label>
                    <input class="form-control" type="file" name="profile_image" id="formFileMultiple" multiple>
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Enter Subject">
                  </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
