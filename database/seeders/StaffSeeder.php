<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Arr;
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i=0; $i<=10; $i++){
            DB::table('staff')->insert([
                'nip'=>rand(),
                'name'=>uniqid('name_'),
                'gender'=>Arr::random(['L', 'P']),
                'alamat'=>uniqid('alamat_'),
                'email'=>uniqid().'@gmail.com',
                'foto'=>uniqid('foto_'),
                'created_at'=>new \DateTime,
                'updated_at'=>null,
            ]);
        }
    }
}
