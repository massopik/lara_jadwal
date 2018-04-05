@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Matkul</div>
      <div class="panel-body">
        <form action="{{ route('matkul.update',$matkul) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Nama Matkul</label>
            <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan Mata Kuliah" value="<?=$matkul->nama_matkul?>">
          </div>
          
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();