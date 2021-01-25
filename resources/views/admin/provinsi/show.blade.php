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
                    
                    <div class="form-group">
                      <label for="">Kode provinsi</label> 
                      <input type="text" class="form-control" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">nama provinsi</label> 
                      <input type="text" class="form-control" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" readonly>
                    </div>
                   
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection