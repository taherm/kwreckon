<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([

            [
                'id'=>'10',
                'image' =>  'img/slider/10-Bookkeeping.jpg',
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'11',
                'image' =>  'img/slider/bookkeeping-services.jpg',
              
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'12',
                'image' =>  'img/slider/feasibility-study.jpg',
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          

        ]);
    }
}
