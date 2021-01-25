@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    edit Data kota
                </div>
                <div class="card-body">
                <div class="form-group">
                      <label for=""> provinsi</label> 
                      <input type="text" class="form-control" name="id_provinsi" value="{{$kota->provinsi->nama_provinsi}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Kode kota</label> 
                      <input type="text" class="form-control" name="kode_kota" value="{{$kota->kode_kota}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">nama kota</label> 
                      <input type="text" class="form-control" name="nama_kota" value="{{$kota->nama_kota}}" readonly>
                    </div>
                   
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection