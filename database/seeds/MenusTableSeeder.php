<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        DB::table('menus')->insert([

            [
                'id'=>'1',
                'title' =>  'Home',
                'parent_id' => '0',
                'url'=>'/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'2',
                'title' =>  'About Us',
                'parent_id' => '0',
                'url'=>'/about',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'7',
                'title' =>  'Services',
                'parent_id' => '0',
                'url'=>'/services',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'8',
                'title' =>  'Contact',
                'parent_id' => '0',
                'url'=>'/contact',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'9',
                'title' =>  'CFO Services',
                'parent_id' => '0',
                'url'=>'/services/cfo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'16',
                'title' =>  'CFO Services',
                'parent_id' => '7',
                'url'=>'services/menu/CFO Services',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'17',
                'title' =>  'Financial Planning Services',
                'parent_id' => '7',
                'url'=>'services/menu/Financial Planning Services',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);

    }
}



