@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Tambah Data Kecamatan
            </div>
            <div class="card-body">
                    <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                    <label for="">Pilih rw</label>
                    <select name="id_rw" class="form-control" required>
                    @foreach($rw as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                    @endforeach
                    </select>
                    </div>
                        <div class="form-group">
                            <label for="">Jumlah Positif</label>
                            <input type="number" name="positif" class="form-control" required>
                        </div>
                        <div class="form-group">
                            
                        </div>
                         <div class="form-group">
                            <label for="">Jumlah Meninggal</label>
                            <input type="number" name="meninggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Sembuh</label>
                            <input type="number" name="sembuh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection