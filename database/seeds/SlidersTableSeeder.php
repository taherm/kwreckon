<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => 'a08c54e390999e87fb0db28cfc100a03.jpg',
                'created_at' => '2018-06-12 19:40:42',
                'updated_at' => '2018-06-12 19:40:42',
            ),
            1 => 
            array (
                'id' => 3,
                'image' => '6a2e4588e395113b9a4c8d73cdb12ca7.jpg',
                'created_at' => '2018-06-12 19:41:11',
                'updated_at' => '2018-06-12 19:41:11',
            ),
            2 => 
            array (
                'id' => 4,
                'image' => 'bf9515ba1a88a57d9eaa54c342815fdd.jpg',
                'created_at' => '2018-06-12 19:41:17',
                'updated_at' => '2018-06-12 19:41:17',
            ),
        ));
        
        
    }
}