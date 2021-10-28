<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RouteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('route')->delete();
        
        \DB::table('route')->insert(array (
            0 => 
            array (
                'route_id' => 1,
                'route_short_name' => 'Línea 1',
            'route_long_name' => 'Línea 1 (ESTEVE - SAN TELMO)',
                'route_color' => '#FEE100',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-1',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            1 => 
            array (
                'route_id' => 2,
                'route_short_name' => 'Línea 2',
            'route_long_name' => 'Línea 2 (ESTEVE - PICADUEÑAS)',
                'route_color' => '#F43400',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-2',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            2 => 
            array (
                'route_id' => 3,
                'route_short_name' => 'Línea 3',
            'route_long_name' => 'Línea 3 (ESTEVE-LAS TORRES)',
                'route_color' => '#E1AB00',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-3',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            3 => 
            array (
                'route_id' => 4,
                'route_short_name' => 'Línea 4',
            'route_long_name' => 'Línea 4 (ESTEVE-SAN JOAQUIN-HIPERCOR)',
                'route_color' => '#C70039',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-4',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            4 => 
            array (
                'route_id' => 5,
                'route_short_name' => 'Línea 5',
            'route_long_name' => 'Línea 5 (CANAL SUR-GUADALCACIN)',
                'route_color' => '#911549',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-4',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            5 => 
            array (
                'route_id' => 6,
                'route_short_name' => 'Línea 6',
            'route_long_name' => 'Línea 6 (ESTEVE-LA GRANJA)',
                'route_color' => '#D29402',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-6',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            6 => 
            array (
                'route_id' => 7,
                'route_short_name' => 'Línea 7',
            'route_long_name' => 'Línea 7 (ANGUSTIAS-ESTELLA)',
                'route_color' => '#6E8D08',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-7',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            7 => 
            array (
                'route_id' => 8,
                'route_short_name' => 'Línea 8',
            'route_long_name' => 'Línea 8 (CIRCULAR 1)',
                'route_color' => '#83CEF6',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-8',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            8 => 
            array (
                'route_id' => 9,
                'route_short_name' => 'Línea 9',
            'route_long_name' => 'Línea 9 (CIRCULAR 2)',
                'route_color' => '#023A9C',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-9',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            9 => 
            array (
                'route_id' => 10,
                'route_short_name' => 'Línea 10',
            'route_long_name' => 'Línea 10 (LA CANALEJA-ESTEVE-HOSPITAL)',
                'route_color' => '#8E5EC4',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-10',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            10 => 
            array (
                'route_id' => 11,
                'route_short_name' => 'Línea 11',
            'route_long_name' => 'Linea 11 (ESTEVE - LA MARQUESA)',
                'route_color' => '#FF9FC5',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-11',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            11 => 
            array (
                'route_id' => 12,
                'route_short_name' => 'Línea 12',
            'route_long_name' => 'Línea 12 (CORREDERA - SAN JOSE OBRERO)',
                'route_color' => '#B3591A',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-12',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            12 => 
            array (
                'route_id' => 13,
                'route_short_name' => 'Línea 13',
            'route_long_name' => 'Linea 13 (ALCAZAR-PUERTAS DEL SUR-ASISA)',
                'route_color' => '#025066',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-13',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            13 => 
            array (
                'route_id' => 14,
                'route_short_name' => 'Línea 14',
            'route_long_name' => 'Linea 14 (ESTEVE - NUEVA ANDALUCÍA - EL ENCINAR)',
                'route_color' => '#E37F7C',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-14',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            14 => 
            array (
                'route_id' => 15,
                'route_short_name' => 'Línea 15',
            'route_long_name' => 'Línea 15 (NUEVA JARILLA - GUADALCACÍN - ANGUSTIAS - EL PORTAL)',
                'route_color' => '#012271',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-15',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            15 => 
            array (
                'route_id' => 16,
                'route_short_name' => 'Línea 16',
            'route_long_name' => 'Línea 16 (ROTONDA CASINO - HIPERCOR - ORTEGA Y GASSET)',
                'route_color' => '#B5B807',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-16',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            16 => 
            array (
                'route_id' => 17,
                'route_short_name' => 'Línea 17',
            'route_long_name' => 'Línea 17 (ROTONDA CASINO - MONTEALTO)',
                'route_color' => '#77291C',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-17',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
            17 => 
            array (
                'route_id' => 18,
                'route_short_name' => 'Línea 18',
            'route_long_name' => 'Línea 18 (CORREDERA - LUZ SHOPPING)',
                'route_color' => '#2397BC',
                'route_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-18',
                'route_type' => 3,
                'created_at' => '2021-10-28 12:10:55',
                'updated_at' => '2021-10-28 12:10:55',
            ),
        ));
        
        
    }
}