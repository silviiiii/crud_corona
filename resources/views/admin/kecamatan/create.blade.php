@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Tambah Data Kecamatan
            </div>
            <div class="card-body">
                <form action="{{route('kecamatan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">Pilih Kota</label>
                    <select name="id_kota" class="form-control" required>
                    @foreach($kota as $data)
                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kode kecamatan</label>
                        <input type="text"name="kode_kecamatan" class="form-control" id="exampleInputEmail1"  placeholder="Kode Kecamatan">
                                @if($errors->has('kode_kecamatan'))
                                    <span class="text-danger">{{ $errors->first('kode_kecamatan') }}</span>
                                @endif
                    </div>
                    <div class="form-group">
                    <label for="">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" id="exampleInputPassword1" placeholder="Nama Kecamatan">
                                @if($errors->has('nama_kecamatan'))
                                    <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
                                @endif
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