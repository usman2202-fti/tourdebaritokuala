<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_bahan = DB::connection('mysql2')
        ->table('rb')
        ->get();

        foreach($old_bahan as $new){
            DB::connection('mysql')->table('rbs')->insert([
                'id' => $new->id,
                'no_ktp' => $new->no_ktp,
                'uci_id' => $new->uci_id,
                'nama' => $new->nama,
                'tanggal_lahir' => $new->tanggal_lahir,
                'alamat' => $new->alamat,
                'telpon' => $new->telpon,
                'kategori' => $new->kategori,
                'no_peserta' => $new->no_peserta,
                'klub' => $new->klub,
                'foto_ktp' => $new->foto_ktp,
                'asuransi' => $new->asuransi,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }
    }
}
