<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Стрижка'],
            ['name' => 'Глажка'],
            ['name' => 'Уход'],
            ['name' => 'Маникюр'],
            ['name' => 'Клининг'],
        ]);
    }
}
