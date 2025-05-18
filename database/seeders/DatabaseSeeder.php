<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrieSeeder::class,            
            CitySeeder::class,
            TypeDocumentSeeder::class,
            ProfileSeeder::class,
            UserSeeder::class,
            VehicleSeeder::class,
            VehiclesDriversSeeder::class
        ]);
    }
}
