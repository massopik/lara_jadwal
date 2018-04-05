@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Matkul</div>
          <div class="panel-body">
            <form action="{{ url('/matkul/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_matkul" placeholder="Masukkan Nama Matkul">
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()