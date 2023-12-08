<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SMKBN666</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <!-- Just an image -->
  <a class="navbar-brand" href="#">
    <img src="images/SMK.png" width="300" height="60" alt="">
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="propil.php">Profil</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="dokumetasi.php">Dokumentasi</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="pesan.php">pesan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="pencarian" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">cari</button>
    </form>
  </div>
</nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNo">No. Telepon</label>
                        <input type="text" class="form-control" id="nomor" name="not">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKepada">Kepada</label>
                        <input type="text" class="form-control" id="kepada" name="kepada">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPesan">pesan</label>
                        <input type="text" class="form-control" id="pesan" name="pesan">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nama'];
      $nomor =$_POST['not'];
      $kepada =$_POST['kepada'];
      $pesan =$_POST['pesan'];

    
    
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>nomor</th>
                        <th scope='col'>kepada</th>
                        <th scope='col'>pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $kepada ?></td>
                        <td><?php echo $pesan ?></td>
                        
                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>
           

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

