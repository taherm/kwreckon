<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$M5PLE4W3O/YSftaZKzWqnuAPCtNVZWwbKzelXXKfFEgBDJA3DPWlu',
                'remember_token' => 'EMqkj2JTw9f06mpVCC3LusBmTotagLOBDstGncows8ErSbndZjUM3gObDosW',
                'created_at' => '2018-06-11 19:44:22',
                'updated_at' => '2018-06-11 19:44:22',
            ),
        ));
        
        
    }
}