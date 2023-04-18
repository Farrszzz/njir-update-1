
@extends('layouts.master')
    <style>
        body {
            background: #627D9A;
        }
        .btn:hover {
            background-color:#444654;
            color:white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 500px 0 rgba(0,0,0,0.19);
            transition-duration: 0.2s;
        }
        

a {
    width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center
}

    </style>
<body>
    

    @if (Auth::user()->role=='Admin')
<div class="container" style="margin-top:70px; margin-left:160px">
    <div class="row">
      <div class="col-12">
        <h1 class="display-4">Selamat datang, Admin</h1>
        <hr class="my-4">
        <p></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-4">
        <a href="/pegawai" class="btn btn-block btn-lg btn-secondary" style="width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
          Data Petugas
        </a>
      </div>
      <div class="col-md-6 mb-4">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-block btn-lg btn-danger" style="width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
            <i class="bi bi-box-arrow-left mr-2"></i>Logout
          </button>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4 d-flex align-items-center">
        <a href="/mall1" class="btn btn-block btn-lg btn-light" style="width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
          Mall 1
        </a>
      </div>
      <div class="col-md-4 mb-4 d-flex align-items-center">
        <a href="/mall2" class="btn btn-block btn-lg btn-light" style="width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
          Mall 2
        </a>
      </div>
      <div class="col-md-4 mb-4 d-flex align-items-center">
        <a href="/mall3" class="btn btn-block btn-lg btn-light" style="width:650px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
          Mall 3
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12 d-flex align-items-center">
        <a href="/keuangan" class="btn btn-block btn-lg btn-light" style="width:1400px; height:150px; border-radius:10px; border: 2px solid black; font-size:53px; display: flex; justify-content: center; align-items: center">
          Laporan Keuangan
        </a>
      </div>
    </div>
  </div>
@endif
</body>