<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Yuu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Belanja Online</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
            <form method="POST">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="pilih_produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="pilih_produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                        <label for="pilih_produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="Kirim" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
            <?php
            // define variables and set to empty values
            $customer = $pilih_produk = $jumlah = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $customer = isset($_POST["customer"]) ? $_POST['customer'] : '';
                $pilih_produk = isset($_POST["pilih_produk"]) ? $_POST['pilih_produk'] : '';
                $jumlah = isset($_POST["jumlah"]) ? $_POST['jumlah'] : '';
                

            echo "<h5>Hasil Input </h5>";
            echo "Customer : $customer";
            echo "<br/>Produk yang dipilih : $pilih_produk";
            echo "<br/>Jumlah produk : $jumlah";
             
            $tv = 4200000 * intval($jumlah);
            $kulkas = 3100000 * intval($jumlah);
            $mesin_cuci = 3800000 * intval($jumlah);

            switch($pilih_produk){
                case "TV":
                    echo "<br/>Total : Rp." . number_format($tv,0,",",".");
                    break;
                case "Kulkas":
                    echo "<br/>Total : Rp." . number_format($kulkas,0,",",".");
                    break;
                default:
                    echo "<br/>Total : Rp." . number_format($mesin_cuci,0,",",".");
                    break;
                }
            }
            ?>

            </div>
            <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
            </ul>
            </div>
        </div>
    </div>
</body>
</html>