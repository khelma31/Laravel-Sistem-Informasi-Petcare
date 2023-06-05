<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributors')->insert([
            'nama' => 'VaksinCorp',
            'email' => 'vaksincorp@gmail.com',
            'alamat' => 'Jl. Perusahaan No. 1',
        ]);
    }
}
