<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    private $uang = 6000;
    private $gelas = 2;
    public $namaMinuman;

    public function __construct($volume, $volumeGelas, $uang, $gelas){
        $this->volume = $volume;
        $this->volumeGelas = $volumeGelas;
        $this->uang = $uang;
        $this->gelas = $gelas;
    }

    public function tampilanDispenser(){
        echo "Volume air sebesar {$this->volume} ml";
        echo "<br/> Volume gelas {$this->volumeGelas}";
        echo "<br/> Uang yang dimiliki Rp. {$this->uang}";
        echo "<br/> Jumlah gelas adalah {$this->gelas}";
    }

    public function isiUlangAir(int $volume){
        if ($volume){
            $this->volume = $volume;
            echo "Kamu telah mengisi volume air sebesar {$this->volume} ml";
        } else {
            echo "Volume air tidak berkurang";
        }
    }

    public function isiGelas(){
        if ($this->volume >= $this->volumeGelas && $this->gelas){
            $this->gelas--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->uang = $this->uang + $this->hargaSegelas;
            echo "Kamu sudah menuangkan air kedalam gelas yang berukuran {$this->volumeGelas} ml seharga {$this->hargaSegelas}";
        } elseif($this->gelas <= 0){
            echo "Gelas tidak tersedia, silakan tambahkan gelasnya";
        } elseif ($this->volume < $this->volumeGelas){
            echo "Volume air tidak mencukupi";
        }
    }
    
    public function isiUlangGelas(int $gelas){
        $hargaGelas = 500;
        $totalHarga = $hargaGelas * $gelas;
        if ($this->uang >= $totalHarga && $totalHarga >= $hargaGelas){
            $this->uang = $this->uang - $totalHarga;
            $this->gelas = $this->gelas + $gelas;
            echo "Kamu telah menambahkan gelas sebanyak {$gelas} buah dengan total harga {$totalHarga} / {$hargaGelas}/pcs";
        } elseif ($this->uang < $hargaGelas){
            echo "Uang tidak mencukupi";
        } elseif ($totalHarga < $hargaGelas){
            echo "Masukkan jumlah gelas dengan benar";
        }
    }
}

class Minuman extends Dispenser{
    public function __construct($namaMinuman, $hargaSegelas){
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $hargaSegelas;
    }
    public function cetak(){
        echo "Ini minuman {$this->namaMinuman} dengan harga {$this->hargaSegelas} /gelas";
    }
}
?>