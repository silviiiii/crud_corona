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
                    <form action="{{route('provinsi.update',$provinsi->id)}}" method= "post">
                        @method('put')
                        @csrf
                    
                    <div class="form-group">
                      <label for="">Kode provinsi</label> 
                      <input type="text" class="form-control" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" required>
                    </div>
                    <div class="form-group">
                      <label for="">nama provinsi</label> 
                      <input type="text" class="form-control" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" required>
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