<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = new \App\Anggota([
        	'nrp_anggota' => '05111540000087',
        	'password_anggota' => '12345',
        	'nama_anggota' => 'Aditya Dwicahyo',
        	'email_anggota' => 'adit@gmail.com',
        	'notelp_anggota' => '08123456789',
        	'biodata_anggota' => 'Saya adalah mahasiswa Teknik Informatika. Sekarang saya masuk UKM Musik',
        	'foto_anggota' => 'https://i.pinimg.com/originals/1a/b3/b0/1ab3b0198fe13d512704946a6b906c77.jpg',
        	'status_anggota' => 'Mahsiswa',
        	'berkas_anggota' => 'testing'
        ]);
    }
}
