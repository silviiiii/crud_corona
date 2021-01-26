@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Tambah Data Rw
            </div>
            <div class="card-body">
                <form action="{{route('Rw.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">Pilih Desa</label>
                    <select name="id_desa" class="form-control" require>
                    @foreach($desa as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Rw</label>
                        <input type="text" name="nama_rw" class="form-control" require>
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