<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class persona_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('personas')->insert //--> //se   hace el llamdo de la tabla
        ([
            'nombre' => 'larry',//--> //se inserta los datos de  acuerdo a los  datos
            'apelido' => 'laaaa',
            'direccion' => 'lomas',
            'telefono' => '212528',

            'nombre' => 'juan',//--> //se inserta los datos de  acuerdo a los  datos
            'apelido' => 'lopez',
            'direccion' => 'maria',
            'telefono' => '212236',


           


            'nombre' => 'luisa',//--> //se inserta los datos de  acuerdo a los  datos
            'apelido' => 'perez',
            'direccion' => 'la paz',
            'telefono' => '2125699',

            'nombre' => 'carold',//--> //se inserta los datos de  acuerdo a los  datos
            'apelido' => 'mera',
            'direccion' => 'esmeralda',
            'telefono' => '21252833',


            'nombre' => 'miguel',//--> //se inserta los datos de  acuerdo a los  datos
            'apelido' => 'mera',
            'direccion' => 'esmeralda',
            'telefono' => '21252833222',
           
        ]);
        //
    }
}
