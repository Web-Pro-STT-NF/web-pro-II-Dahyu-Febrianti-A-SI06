<?php
class NilaiMahasiswa{
    var $NIM;
    var $matkul;
    var $nilai;

    function __construct($NIM , $matkul , $nilai){
        $this->NIM=$NIM;
        $this->Matkul=$matkul;
        $this->Nilai=$nilai;
    }

    function hn($nilai){
        if ($nilai > 85){
             return "A";
         } else if ($nilai > 78){
             return "B";
         } else if ($nilai > 56){ 
             return "C";
         } else if ($nilai > 36){ 
             return "D";
         } else if ($nilai > 0){
             return "E";
         }else{
             return "I";
         }  
     }

     function predikat($grade){
         switch ($grade){
             case "A" :
                 return "Sangat Memuaskan";
                 break;
             case "B" :
                 return "Memuaskan";
                 break;
             case "C" :
                 return "Cukup";
                 break;
             case "D" :
                 return "Kurang";
                 break;
             case "E" :
                 return "Sangat Kurang";
                 break;
             default :
                 return "Tidak Diketahui";
         } 
     }
}
?>