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
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/buku">{{ __('navbar.title1')}}</a></li>
            <li><a class="dropdown-item" href="/anggota">{{ __('navbar.title2')}}</a></li>
            <li><a class="dropdown-item" href="/pustakawan">{{ __('navbar.title3')}}</a></li>
          </ul>
        </li>	
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/lap1">{{ __('navbar.title4')}}</a></li>
            <li><a class="dropdown-item" href="/lap2">{{ __('navbar.title5')}}</a></li>
          </ul>
        </li>		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Rekapitulasi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/lap3">{{ __('navbar.title6')}}</a></li>
            <li><a class="dropdown-item" href="/lap4">Rekap Peminjaman Per-Anggota</a></li>
            <li><a class="dropdown-item" href="/lap5">Rekap Rata-rata Harga Buku Tiap Penerbit</a></li>
            <li><a class="dropdown-item" href="/lap6">Rekap Jumlah Buku Tiap Penulis</a></li>			
          </ul>
        </li>			  
    </ul>
  </div>
</nav>

@yield('content')

<footer class="bg-dark py-4 text-white mt-4"> 
   <div class="container text-center"> 
      <small class="text-center"> {{ __('navbar.footer1')}}
	  <BR> {{ __('navbar.footer2')}}</small> 
   </div> 
</footer>
</body>
<!--Bootstrap 5.1 Java Script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

