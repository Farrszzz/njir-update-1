<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/app.css">
    </head>
<nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Dashboard Admin</a>
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
          <a class="nav-link" href="/pegawai">Data Petugas</a>
        </li>
      </ul>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-success"><i class="bi bi-box-arrow-right"></i>Logout</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</html>