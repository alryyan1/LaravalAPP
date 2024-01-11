<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialists')->insert([
            'name' => 'عمومي',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('specialists')->insert([
            'name' => 'الباطنيه',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
