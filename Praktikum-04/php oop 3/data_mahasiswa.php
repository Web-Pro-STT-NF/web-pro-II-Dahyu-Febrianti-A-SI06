<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Data Mahasiswa</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WEB 02</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Review PHP
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PHP5 OOP
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

<?php 
    include_once "class_mahasiswa.php";

    $ds1 = new Mahasiswa (02011, "Faiz Rizki", "TI", "2012", 3.8);
    $ds2 = new Mahasiswa (02012, "Alissa Khairunnisa", "TI", "2012", 3.9);
    $ds3 = new Mahasiswa (01011, "Rosalie Naurah", "SI", "2010", 3.46);
    $ds4 = new Mahasiswa (01012, "Defghi Muhammad", "SI", "2010", 3.2);

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<table class="table-primary" border="1" width="100%">

<thead>
    <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>Thn Angkatan</th>
    <th>IPK</th>
    <th>Predikat</th>
    </tr> 
</thead>

<tbody>
<?php
    $nomor = 1; 
    foreach($ar_nilai as $ns){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns->getNIM().'</td>';
    echo '<td>'.$ns->getnama().'</td>';
    echo '<td>'.$ns->getprodi.'</td>';
    echo '<td>'.$ns->getthn_angkata().'</td>';
    echo '<td>'.$ns->getipk().'</td>';
    echo '<td>'.$ns->getpredikat().'</td>';
    echo '<tr/>';
    $nomor++;
    }
?>

<div class="row">
           <div class="col-12 bg-light pt-3">
               <p>Develop by Mahasiswa STT NF</p>
           </div>
       </div>
       
</tbody> 
</table>

</body>
</html>