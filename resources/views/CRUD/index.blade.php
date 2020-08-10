@extends('adminlte.master')
@section('content')
<div class="mt-3 ml-3">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pertanyaan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
              	@if(session('success'))
              		<div class="alert alert-success">
              		{{session ('success')}}
              		</div>
              	@endif
              	<a class="btn btn-primary mb-2" href="{{route('pertanyaan.create')}}">Create New</a>
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                    <th style="width:10px">No</th>
                      <th >Judul</th>
                      <th>Isi</th>
                      <th>Action</th>

                    </tr>
                  </thead>

                  <tbody> 
 <!-- untuk setiap postingan di tabel pertanyaan diambil keynya atau indeks array(0,1,2)// =>$pertanyaan:untuk setiap kali looping diambil datanya -->
                  	@forelse($pertanyaan as $key=>$pertanyaan)
                  		<tr>
                      <td>{{$key+1}}</td>
                      <td>{{$pertanyaan->judul}}</td>
                      <td>{{$pertanyaan->isi}}</td>
                      <td>
                      	<a href="{{route('pertanyaan.show',['pertanyaan'=>$pertanyaan->id])}}" class="btn btn-info btn-sm">Detail</a>
                      	<a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                      	<form action="/pertanyaan/{{$pertanyaan->id}}" method="post">
                      		@csrf
                      		@method('DELETE')
                      		<input type="submit" value="Delete" class="btn btn-danger btn-sm btn-sm">
                      	</form>

                    </td>
                    </tr>
                    @empty
                   <tr>
                   	<td colspan="4" align="center"> No Post</td>
                   </tr>
                  	@endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>	
</div>
@endsection