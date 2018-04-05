@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Order</div>
          <div class="panel-body">
            <form action="{{ url('/jadwal/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Hari</label>
                  <input type="text" name="hari" class="form-control">
        
                </div>
                <div class="form-group">
                  <label for="">Nama Dosen</label>
                  <select name="dosen_id" id="" class="form-control">
                    @foreach($dosens as $d)
                    <option value="<?=$d->id?>"><?=$d->nama?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Ruangan</label>
                  <select name="ruangan_id" id="" class="form-control">
                    @foreach($ruangans as $r)
                    <option value="<?=$r->id?>"><?=$r->nama_ruangan?></option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Nama Mata Kuliah</label>
                  <select name="matkul_id" id="" class="form-control">
                    @foreach($matkuls as $m)
                    <option value="<?=$m->id?>"><?=$m->nama_matkul?></option>
                    @endforeach
                  </select>
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