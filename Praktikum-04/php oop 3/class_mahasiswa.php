<?php
class Mahasiswa{
    var $NIM;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($NIM , $nama , $thn_angkatan , $prodi , $ipk){
        $this->NIM=$NIM;
        $this->nama=$nama;
        $this->thn_angkatan=$thn_angkatan;
        $this->prodi=$prodi;
        $this->ipk=$ipk;
    }

    function getNIM(){
        return $this->nim;
    }
    function getnama(){
        return $this->nama;
    }
    function getthn_angkatan(){
        return $this->thn_angkatan;
    }
    function getipk(){
        return $this->ipk;
    }

    function predikat(){
        if ($this->ipk<2.0) return "Cukup";
        ellseif ($this->ipk>=2.0 && $this->ipk <3.0) return "Baik";
        ellseif ($this->ipk>=3.0 && $this->ipk <3.75) return "Memuaskan";
        ellseif ($this->ipk>=3.75 && $this->ipk <4) return "Cumlaude";
    }
}
?>