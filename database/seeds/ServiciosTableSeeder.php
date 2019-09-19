<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
   
    private $servicios = [

        ['nombre_servicio' => 'Payroll','url_imagen'=> 'imagenes/payroll/bpo-mqquila.png'],
        ['nombre_servicio' => 'Administración de personal','url_imagen'=> 'imagenes/payroll/bpo-mqquila.png'],
        ['nombre_servicio' => 'fiscal','url_imagen'=> 'imagenes/payroll/bpo-mqquila.png'],
        ['nombre_servicio' => 'Contabilidad outsourcing','url_imagen'=> 'imagenes/payroll/bpo-mqquila.png'],
        ['nombre_servicio' => 'Jurídico','url_imagen'=> 'imagenes/payroll/bpo-mqquila.png']
    ];


    public function run()
    {
        foreach($this->servicios as $key => $servicios){
            DB::table('servicios')->insert($servicios);
        }
    }
}
