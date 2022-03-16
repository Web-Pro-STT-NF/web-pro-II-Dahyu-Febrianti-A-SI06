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
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
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
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-3">
                <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai uts" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-3">
                <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai uas" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-3">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai tugas" type="text" class="form-control">
                </div>
            </div> 

            <div class="form-group row">
                <div class="offset-4 col-3">
                <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
            </form>

            <?php
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                echo "Nama Lengkap : $nama";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $nilai_uts";
                echo "<br/>Nilai UAS : $nilai_uas";
                echo "<br/>Nilai Tugas : $nilai_tugas";

                $nilai_akhir = (0.3 * (int)$nilai_uts) + (0.35 * (int)(int)$nilai_uas) +(0.35 * (int)$nilai_tugas);
                

                echo "<br/>Nilai Akhir : ", nilai_akhir($nilai_uts, $nilai_uas, $nilai_tugas);
                echo "<br/>Status : ", kelulusan($nilai_akhir);
                echo "<br/>Grade : ", grade_nilai($nilai_akhir);
                echo "<br/>Predikat : ", predikat(grade_nilai($nilai_akhir));

                function nilai_akhir($nilai_uts, $nilai_uas, $nilai_tugas){
                    $result = (0.3 * (int)$nilai_uts) + (0.35 * (int)(int)$nilai_uas) +(0.35 * (int)$nilai_tugas);
                    return $result;
                }
                function kelulusan($nilai_akhir){
                    if($nilai_akhir > 55){
                        return "Lulus";
                    } else {
                        return "Tidak Lulus";
                    }
                }

                function grade_nilai($nilai_akhir){
                   if ($nilai_akhir > 85){
                        return "A";
                    } else if ($nilai_akhir > 78){
                        return "B";
                    } else if ($nilai_akhir > 56){ 
                        return "C";
                    } else if ($nilai_akhir > 36){ 
                        return "D";
                    } else if ($nilai_akhir > 0){
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