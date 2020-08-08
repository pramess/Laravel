@extends('adminlte.master')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit {{$pertanyaan->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" enctype="media type"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{old('judul',$pertanyaan->judul)}}" id="judul"  placeholder="Enter ... ">
                    @error('judul')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" value="{{old('isi',$pertanyaan->isi)}}" id="isi"  placeholder="Enter ... ">
                    @error('isi')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
       
    </section>
@endsection
@push('script')
<!-- bs-custom-file-input -->
<script src="{{asset ('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('adminlte/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
