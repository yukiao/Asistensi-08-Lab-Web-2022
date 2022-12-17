<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 1000; $i++) {
            DB::table('mahasiswas') ->insert([
                'nim' => $faker->unique()->randomNumber(8),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'fakultas' => $faker->word
            ]);
        }
        
    }
}
