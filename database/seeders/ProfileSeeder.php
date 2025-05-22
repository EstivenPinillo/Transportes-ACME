<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Profile::factory()->count(3)->create();
        Profile::create([
            'name' => 'Administrador',
            'description' => 'Administrador'
        ]);
        Profile::create([
            'name' => 'Propietario',
            'description' => 'Propietario del vehiculo'
        ]);
        Profile::create([
            'name' => 'Conductor',
            'description' => 'Conduce el vehiculo'
        ]);
    }
}
