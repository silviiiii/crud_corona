@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    edit Data Provinsi
                </div>
                <div class="card-body">
                    <form action="{{route('kota.update',$kota->id)}}" method= "post">
                        @method('put')
                        @csrf
                    
                    <div class="form-group">
                      <label for="">pilih provinsi</label> 
                      <select name="id_provinsi" class="form-control">
                      @foreach($provinsi as $data)
                      <option value="{{$data->id}}" {{$data->id == $kota->id_provinsi ? 'selected' : ''}}>
                      {{$data->nama_provinsi}}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Kode kota</label> 
                      <input type="text" class="form-control" name="kode_kota" value="{{$kota->kode_kota}}" required>
                    </div>
                    <div class="form-group">
                      <label for="">nama kota</label> 
                      <input type="text" class="form-control" name="nama_kota" value="{{$kota->nama_kota}}" required>
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