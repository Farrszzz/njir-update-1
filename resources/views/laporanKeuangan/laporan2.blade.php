<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    </head>

    <nav class="navbar navbar-expand-lg bg-dark" style="outline: 2px solid black">
    <div class="container-fluid">
      <a class="navbar-brand" href="/mall2" style="color:white">Dashboard Mall 2</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item" style="font-size: 23px; color:white"><i class="bi bi-person-fill" style="margin-right: 5px; color:white"></i>Administrator</li>
        </ul>
          <form action="/logout" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn" style="outline: 1px solid #ec5453; color:white"><i class="bi bi-box-arrow-right" style="margin-right: 5px"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>

    </html>
@extends('layouts.master')
@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
    
<div class="row" style="margin-left: -100px">
            <div class="col-6">
                <h1>Data Pemasukan Mall 2</h1>
            </div>
            <table class="table">
                <tr style="background-color:#444654">
                    <th style="color:white">No.</th>
                    <th style="color:white">Plat Nomor</th>
                    <th style="color:white">Jumlah Kunjungan</th>
                    <th style="color:white">Tarif</th>
                </tr>
                
                  @foreach($data_parkir as $parkir)
                  @if ($parkir->tarif > 0)
                  <tr>
                      <td>{{$i}}</td>
                      <td>{{$parkir->platNomor}}</td>
                      <td>{{$parkir->pernah_masuk}}</td>
                      <td>{{$parkir->tarif}}</td>
                  </tr>
                  <?php $i++; ?>
                  @endif
                  @endforeach
                <tr style="background-color:#444654">
                    <td style="color:white">Total Pemasukan:</td>
                    <td></td>
                    <td></td>
                    <td style="color:white">{{ $total_tarif }}</td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</html>
@endsection