<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('services')->insert([

            [
                'id'=>'4',
                'title' =>  'Bookkeeping and Accounting',
                'description' => '<p>Bookkeeping</p>',
                'image'=>'img/services/Accounting.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'5',
                'title' =>  'CFO Services',
                'description' => '<p>CFO Services</p>',
                'image'=>'img/services/cfo.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'6',
                'title' =>  'Financial Planning Services',
                'description' => '<p>Financial Planning Services</p>',
                'image'=>'img/services/FINANCIAL-PLAN.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          
         
        ]);
    }
}
