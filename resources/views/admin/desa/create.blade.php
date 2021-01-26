@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Tambah Data Desa
            </div>
            <div class="card-body">
                <form action="{{route('desa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">Pilih Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" require>
                    @foreach($kecamatan as $data)
                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                    @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Nama Desa</label>
                        <input type="text" name="nama" class="form-control" require>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection