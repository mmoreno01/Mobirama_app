<?php

use Illuminate\Database\Seeder;

class SintomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sintomas')->insert([
            'answer' => 'Escurrimiento y/o congestión nasal',
            'categoria' => 'basicos',
            'value' => 0
        ]);
        DB::table('sintomas')->insert([
            'answer' => 'Tos seca',
            'categoria' => 'basicos',
            'value' => 0
        ]);
        DB::table('sintomas')->insert([
            'answer' => 'Dolor de músculos, articulaciones y/o cabeza',
            'categoria' => 'basicos',
            'value' => 0
        ]);
        DB::table('sintomas')->insert([
            'answer' => 'Febrícula (37°C a 38°C)',
            'categoria' => 'basicos',
            'value' => 0
        ]);

//Sintomas  alarma resentes
        DB::table('sintomas')->insert([
            'answer' => 'Fiebre > 38°C',
            'categoria' => 'medios',
            'value' => 0
        ]);

        DB::table('sintomas')->insert([
            'answer' => 'Dificultad para respirar o disnea:
            (Entiéndase por aquella situación en la que con rutinas diarias habituales como caminar, 
            subir escaleras, vestirse se experimenta sensación de falta de aire)',
            'categoria' => 'medios',
            'value' => 0
        ]);
        DB::table('sintomas')->insert([
            'answer' => 'Observar que labios o uñas en tonos azules',
            'categoria' => 'medios',
            'value' => 0
        ]);

//Factor de riesgo
        DB::table('sintomas')->insert([
            'answer' => 'Haber estado en contacto con algún caso sospecho de COVID-19',
            'categoria' => 'altos',
            'value' => 0
        ]);

        DB::table('sintomas')->insert([
            'answer' => 'Haber estado en contacto con algún caso confirmado de COVID-19',
            'categoria' => 'altos',
            'value' => 0
        ]);

        DB::table('sintomas')->insert([
            'answer' => 'Macroeventos o situaciones que involucren multitudes (conciertos, marchas, aeropuertos, central de camiones, 
            carrera, convenciones, exposiciones, entre otros) ',
            'categoria' => 'altos',
            'value' => 0
        ]);

        DB::table('sintomas')->insert([
            'answer' => 'Viajes a destinos turísticos nacionales y extranjero',
            'categoria' => 'altos',
            'value' => 0
        ]);

        DB::table('sintomas')->insert([
            'answer' => 'Contacto con personas extranjeras ',
            'categoria' => 'altos',
            'value' => 0
        ]);
        
    }
}
