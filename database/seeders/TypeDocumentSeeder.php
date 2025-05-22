<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeDocument;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TypeDocument::factory()->count(3)->create();
        TypeDocument::create([
            'name' => 'Cedula de ciudadania',
            'description' => 'Cedula'
        ]);
        TypeDocument::create([
            'name' => 'Tarjeta de identidad',
            'description' => 'Propietario del vehiculo'
        ]);
        TypeDocument::create([
            'name' => 'Pasaporte extrajero',
            'description' => 'Pasaporte'
        ]);
    }
}
