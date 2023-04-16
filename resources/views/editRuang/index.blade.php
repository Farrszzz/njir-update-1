@extends('layouts.master')

@section('content')
    <h1>Edit Ruang Parkir</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
        <div class="col lg-12">
        <form action="/pruang1/{{$data_parkir->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Plat Nomor</label>
                    <input type="text" name="platNomor" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="{{$data_parkir->platNomor}}" value="{{$data_parkir->platNomor}}" readonly>
                </div>
                
                <div class="form-group">
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <!-- <select class="form-control" name="ruang" id="exampleFormControlSelect1">
                    @foreach ($data_ruang as $ruang)
                    <option value="{{$data_parkir->ruangParkir}}">{{$ruang->ruang}}</option>
                    @endforeach
                </select> -->
                <input type="text" name="ruangParkir" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="Ruang" value="{{$data_parkir->ruangParkir}}">
                </div>
                <div class="form-group" hidden>
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <select class="form-control" name="sudah_masuk" id="exampleFormControlSelect1">
                    
                    <option value="1">1</option>
                    
                </select>
                </div>
                <div class="form-group" hidden>
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <select class="form-control" name="pernah_masuk" id="exampleFormControlSelect1">
                    
                    <option value="{{$data_parkir->pernah_masuk+=1}}">1</option>
                    
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
@endsection