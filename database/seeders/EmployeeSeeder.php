<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Lamine',
                'lastname' => 'Yamal',
                'email'=> 'lamineyamal@gmail.com',
                'age' => 19,
                'position_id' => 1
            ],
            [
                'firstname' => 'Niko',
                'lastname' => 'Bellic',
                'email'=> 'nikobellic@gmail.com',
                'age' => 44,
                'position_id' => 2
            ],
            [
                'firstname' => 'Luka',
                'lastname' => 'Luki',
                'email'=> 'lukalukiluko@gmail.com',
                'age' => 46,
                'position_id' => 3
            ],
        ]);
    }
}
