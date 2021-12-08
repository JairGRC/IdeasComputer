<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-12-05 01:44:07',
                'updated_at' => '2021-12-05 01:44:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2021-12-05 01:44:07',
                'updated_at' => '2021-12-05 01:44:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'vendedor',
                'display_name' => 'Vendedor',
                'created_at' => '2021-12-08 06:11:44',
                'updated_at' => '2021-12-08 06:11:44',
            ),
        ));
        
        
    }
}