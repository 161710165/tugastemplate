<?php

use Illuminate\Database\Seeder;

class wentiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
              ['Nis'=>'123',
              'Nama'=>'wenti',
              'Tempat_lahir'=>'bandung',
              'Tanggal_lahir'=>'2001-03-27',
              'Alamat'=>'bandung',
              'Cita-cita'=>'polwan',
              'Hobi'=>'voli',
              'Photo'=>'tidak ada'],
              ];
                DB::table('tugas')->insert($a);
    }
}
