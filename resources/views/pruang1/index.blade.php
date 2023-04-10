<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    </head>
<nav class="navbar navbar-expand-lg bg-light"  >
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Dashboard Mall 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href= "#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Parkir Mall
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/mall1">Mall 1</a></li>
            <li><a class="dropdown-item" href="/mall2">Mall 2</a></li>
            <li><a class="dropdown-item" href="/mall3">Mall 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pmasuk1">Petugas Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pruang1">Petugas Ruang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pkeluar1">Petugas Keluar</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
@extends('layouts.master')
@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
<div class="row">
            <div class="col-6">
                <h1>DATA Parkir</h1>
            </div>
            <table class="table">
                <tr>
                    <th>ID Parkir</th>
                    <th>Plat Nomor</th>
                    <th>Ruang</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data_parkir as $parkir)
                
                <tr>
                    @if($parkir->sudah_masuk == 0)
                        <tr style = 'background-color:green; color:white'>
                    @else
                        <tr style = 'background-color:red; color:white'>
                    @endif
                    <td>{{$parkir->id}}</td>
                    <td>{{$parkir->platNomor}}</td>
                    @if($parkir->sudah_masuk == 0)
                        <td>Belum masuk</td>
                    @else
                        <td>{{$parkir->ruangParkir}}</td>
                    @endif
                    <td>
                    <a href="/pruang1/{{$parkir->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</html>
@endsection