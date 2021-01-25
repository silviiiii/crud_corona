@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    Tambah Data Kota
                </div>
                <div class="card-body">
                    <form action="{{route('kota.store')}}" method= "post">
                        @csrf
                        <div class="form-group">
                      <label for="">pilih provinsi</label> 
                      <select name="id_provinsi" class="fprm-control">
                      @foreach($provinsi as $data)
                      <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Kode kota</label> 
                      <input type="text" name="kode_kota" class="fprm-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">nama kota</label> 
                      <input type="text" name="nama_kota" class="fprm-control" required>
                    </div>
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection