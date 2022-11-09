<!DOCTYPE html>
<html lang='en'>
<head>
  <title>@yield('title')</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!--Bootstrap 5.1 css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/buku">Data Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/anggota">Data Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/perpustakawan">Data Perpustakawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/peminjaman">Data Peminjaman</a>
      </li>
     </ul>
  </div>
</nav>

@yield('content')

<footer class="bg-dark py-4 text-white mt-4"> 
   <div class="container text-center"> 
      <small class="text-center"> Perpustakaan Universitas Juanda 
	  <BR> Jl. Dago 96 Bandung Jawa Barat</small> 
   </div> 
</footer>
</body>
<!--Bootstrap 5.1 Java Script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

