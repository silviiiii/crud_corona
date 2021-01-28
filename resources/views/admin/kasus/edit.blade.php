@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Edit Data Kasus
            </div>
            <div class="card-body">
                <form action="{{route('kasus.update' ,$kasus->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                    <label for="">Pilih rw</label>
                    <select name="id_rw" class="form-control" require>
                    @foreach($rw as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah positif</label>
                        <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" require>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" require>
                    </div>
                    <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" require>
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