<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        Category::insert([
            ['name' => 'Стрижка'],
            ['name' => 'Глажка'],
            ['name' => 'Уход'],
            ['name' => 'Маникюр'],
            ['name' => 'Клининг'],
        ]);
    }
}
