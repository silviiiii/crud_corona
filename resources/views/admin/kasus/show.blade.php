@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Show Data Kasus
            </div>
            <div class="card-body">
            <div class="form-group">
                        <label for=""> Jumlah positif</label>
                        <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" readonly>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" readonly>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection