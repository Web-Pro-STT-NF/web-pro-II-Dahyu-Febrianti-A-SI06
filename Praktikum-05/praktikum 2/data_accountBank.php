<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <title>Data Account</title>
   <style>
        th{
            background: #a0f1ea;
        }
        tr{
            background: #E0FFFF;
        }
    </style>
</head>

<body>
<?php 
    $ab1 = ['id'=>1,'no.Account'=>'C001','Pemilik'=>'Ahmad','Saldo'=>6000000];
    $ab2 = ['id'=>2,'no.Account'=>'C002','Pemilik'=>'Budi','Saldo'=>5350000];
    $ab3 = ['id'=>3,'no.Account'=>'C003','Pemilik'=>'Kurniawan','Saldo'=>2500000];

?>

<h3>Daftar Account Bank</h3>
<table class="table-primary" border="1" width="100%">

<thead>
    <tr>
    <th>No</th>
    <th>No.Account</th>
    <th>Pemilik</th>
    <th>Saldo</th>
    </tr> 
</thead>

<tbody>
<?php
    $nomor = 1; 
    foreach($ar_account as $ab){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ab['No.Account'].'</td>';
    echo '<td>'.$ab['Pemilik'].'</td>';
    echo '<td>'.$ab['Saldo'].'</td>';
    echo '<tr/>';
    $nomor++;
    }
?>
</tbody> 
</table>

</body>
</html>
