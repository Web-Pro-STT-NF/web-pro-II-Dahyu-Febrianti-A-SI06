<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

   <div class="container card">
       <div class="row">
           <div class="col-12 bg-light pt-3">
               <p>Sistem Penilaian</p>
           </div>
       </div>
       <div class="row">
           <div class="col-12">
               <p>Form Nilai Siswa</p>
               <hr>
           </div>
       </div>
       <div class="row">
           <div class="col-12">
            <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">NIM</label> 
                <div class="col-5">
                <input id="nama" name="nama" placeholder="masukkan nama lengkap" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-5">
                        <select id="matkul" name="matkul" class="custom-select">
                        <option value="Pilih Mata Kuliah">Pilih Mata Kuliah</option>
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="UI & UX">UI & UX</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="PPKn">PPKn</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Pemrograman Web 2">Pemrograman Web</option>
                        <option value="Statistika">Statistika</option>
                        </select>
                    </div>
            </div>

            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai</label> 
                <div class="col-3">
                <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai uts" type="text" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <div class="offset-4 col-3">
                <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
            </form>

            <?php
            require_once "nilai_mahasiswa.php"
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['NIM']) ? $_POST['NIM'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai']) ? $_POST['nilai'] : '';
                
                $nm = new NilaiMahasiswa($NIM, $matkul, $nilai)
                echo "NIM : " $nm->NIM;
                echo "<br/>Mata Kuliah : " $nm->matkul;
                echo "<br/>Nilai : " $nm->nilai;
 
                $hn = $nm->hasil($nilai)
                echo "<br/>Nilai akhir : " $hn;

                $gn = $nm->predikat($grade)
                echo "<br/>Grade : " $gn; 
            ?> 
            
            

           </div>
       </div>

       <div class="row">
           <div class="col-12 bg-light pt-3">
               <p>Develop by Mahasiswa STT NF</p>
           </div>
       </div>

   </div>
</body>
</html>