<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    </head>

<nav class="navbar navbar-expand-lg bg-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Admin</a>
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
          </ul>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">Dashboard Mall 1</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:400px; display:inline-block">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pmasuk1">Petugas Masuk</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pruang1">Petugas Ruang</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button style="width:400px; height:150px; background-color:white; border-radius:10px">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pkeluar1">Petugas Keluar</a>
            </button>
            <hr class="my-4">
        </div> 
    </div>
   </html> 