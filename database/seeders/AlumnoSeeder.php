<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            'nombre' => 'Carlos', 
            'correo' => 'jason@gmail.com', 
            'codigo' => 1122,
        'created_at' => now(),
        'updated_at' => now(),
        ]);


        Alumno::create([
              'nombre'=>'Pedro',
              'correo'=>'hola@gmail.com',
              'codigo'=>1112,  
        ]);

        Alumno::factory(50)->create();
    }
}
