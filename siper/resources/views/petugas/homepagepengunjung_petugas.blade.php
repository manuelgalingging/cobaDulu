<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/homepagepengunjung_petugas.css">
    <title>Homepage | SIPER</title>

    
  </head>
  <body>
   <!-- Navbar -->

   <nav class="navbar navbar-expand-lg navbar-white bg-blue">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">SIPER</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
           
                    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a href="profilePetugas"class="dropdown-item" >Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                         </form><li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    
    
    <!-- body -->
    <center>
       <h1>Profil Perpustakaan</h1>
       <h2>SMA Swasta HKBP 2 Tarutung</h2> 
       <hr class="line">
      </center>

       <!-- search bar-->
<!--       
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
    
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
  </nav>
 
<br> -->
  <!--end of search bar-->

  <div class="container">
  <div class="row"><nav style="margin-left:400px; margin-bottom:40px;"class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
    
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
  </nav>
    <div class="col-sm"  >
    <td >



    <ul class="list-group" >
  <li class="list-group-item active"  aria-current="true"><a class="nav-link active" aria-current="page" href="{{ route('v_pengunjung') }}">Pengunjung</a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_peminjaman') }}">Peminjaman</a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_pengembalian') }}">Pengembalian </a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_perpanjangan') }}">Perpanjangan </a></li>
  <li class="list-group-item"><a class="nav-link" href="{{ route('v_databuku') }}">Data Buku </a></li>
  <li class="list-group-item">  <a class="nav-link" href="{{ route('v_daftarbuku') }}">Daftar Buku </a></li>
</ul>
        <!-- <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('v_pengunjung') }}">Pengunjung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_peminjaman') }}">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_pengembalian') }}">Pengembalian </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('v_perpanjangan') }}">Perpanjangan </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('v_databuku') }}">Data Buku </a>
          </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('v_daftarbuku') }}">Daftar Buku </a>
          </li>
        </li>
      </ul> -->
    

    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Nama</h3>
    <h6 class="card-text">Username</h6>
    
  
    </div>
   

  </div>
  <a href="#" class="btn btn-primary" style="margin-left:450px; margin-top:-100px;" data-target="#detailpengunjung" data-toggle="modal">Details</a>
  </td>


<!--Details -->

<div class="modal fade" id="detailpengunjung" tabdata-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
             
                    <form>
                        @csrf
                        <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                             <p></p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                            <p></p>
                             
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                           <p></p>
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                           <p></p>
                             
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                          <p></p>
                            </div>

                  
                 
                    </form>
                 
                </div>
            </div>
        </div>
    </div>









<!-- 
  <table border="0px" align="center">
    <td>
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('v_pengunjung') }}">Pengunjung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_peminjaman') }}">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('v_pengembalian') }}">Pengembalian </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('v_perpanjangan') }}">Perpanjangan </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('v_databuku') }}">Data Buku </a>
          </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('v_daftarbuku') }}">Daftar Buku </a>
          </li>
        </li>
      </ul>
    
      </td> -->
<!-- 
      <td class=cardForm>

            <div class="card mb-3" style="max-width: 490px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://img2.pngdownload.id/20190807/gxp/kisspng-businessperson-avatar-user-profile-business-admini-5d4a5d51a0e693.2711748415651546416591.jpg" width="150x150" class="img-fluid rounded-start" alt="...">
                    </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Pengunjung</h5>
                <p class="card-text">Nama : Tiara</p>
                </div>
            </div>
            </div>
        </div> -->


          
    </td>
    </table>
  </body>
  <footer>
  <div class="text-center">
    <div class="container p-2"></div>
    <div class="text-center p-1">
      ?? 2022 Copyright: SIPER SMA Swasta HKBP 2 Tarutung </div>
    <div class="text-center p-1">
      Contact Us On : xxxxxxxx </div>
  </div>
  </footer>
  <!--Footer -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>