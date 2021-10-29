<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CalendarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calendar')->delete();
        
        \DB::table('calendar')->insert(array (
            0 => 
            array (
                'created_at' => '2021-10-29 01:18:05',
                'end_date' => '2022-06-01',
                'friday' => 1,
                'monday' => 1,
                'saturday' => 0,
                'service_id' => 'INVLAB',
                'start_date' => '2021-09-01',
                'sunday' => 0,
                'thursday' => 1,
                'tuesday' => 1,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 1,
            ),
            1 => 
            array (
                'created_at' => '2021-10-29 01:18:06',
                'end_date' => '2022-06-01',
                'friday' => 0,
                'monday' => 0,
                'saturday' => 1,
                'service_id' => 'INVSAB',
                'start_date' => '2021-09-01',
                'sunday' => 0,
                'thursday' => 0,
                'tuesday' => 0,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 0,
            ),
            2 => 
            array (
                'created_at' => '2021-10-29 01:18:06',
                'end_date' => '2022-09-01',
                'friday' => 0,
                'monday' => 0,
                'saturday' => 0,
                'service_id' => 'INVDOM',
                'start_date' => '2022-06-01',
                'sunday' => 1,
                'thursday' => 0,
                'tuesday' => 0,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 0,
            ),
            3 => 
            array (
                'created_at' => '2021-10-29 01:18:06',
                'end_date' => '2022-06-01',
                'friday' => 1,
                'monday' => 1,
                'saturday' => 0,
                'service_id' => 'VERLAB',
                'start_date' => '2021-09-01',
                'sunday' => 1,
                'thursday' => 1,
                'tuesday' => 1,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 1,
            ),
            4 => 
            array (
                'created_at' => '2021-10-29 01:18:06',
                'end_date' => '2022-09-01',
                'friday' => 0,
                'monday' => 0,
                'saturday' => 1,
                'service_id' => 'VERSAB',
                'start_date' => '2022-06-01',
                'sunday' => 0,
                'thursday' => 0,
                'tuesday' => 0,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 0,
            ),
            5 => 
            array (
                'created_at' => '2021-10-29 01:18:06',
                'end_date' => '2022-09-01',
                'friday' => 0,
                'monday' => 0,
                'saturday' => 0,
                'service_id' => 'VERDOM',
                'start_date' => '2022-06-01',
                'sunday' => 1,
                'thursday' => 0,
                'tuesday' => 0,
                'updated_at' => '2021-10-29 01:18:06',
                'wednesday' => 0,
            ),
        ));
        
        
    }
}