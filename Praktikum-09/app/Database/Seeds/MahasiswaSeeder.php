<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '0110121125',
                'nama'              => 'Dahyu',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2003-02-02',
                'tempat_lahir'      => 'Bandung',
                'program_study'     => 'Sistem Informasi',
                'ipk'               => '3.8',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '0110121125',
                'nama'              => 'Febrianti',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2003-02-02',
                'tempat_lahir'      => 'Bandung',
                'program_study'     => 'Sistem Informasi',
                'ipk'               => '3.8',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
