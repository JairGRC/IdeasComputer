<?php

namespace Database\Seeders;

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
                'role_id' => 1,
                'name' => 'Jair Rodriguez',
                'email' => 'cliente@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qKYpf7BSQWdiXAASHkIlreZPEAbXcTa12vFYBMqzI46k3EEjFEffe',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-12-05 00:03:46',
                'updated_at' => '2021-12-05 00:03:46',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'avatar' => 'users\\December2021\\00nl61gAJSRiE7FLvnIE.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Zl7ldtBNcCQPovkwX9lDqelyY4Giub.x3cjmPHp4THxosqPnkpImG',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-12-05 01:50:12',
                'updated_at' => '2021-12-05 01:55:22',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Vendedor',
                'email' => 'vendedor@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WKWC/wfcMAZEPF2t8c7oqu6tq.0WDjiu2rxmDygGbcQGhjFI6N5oy',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-12-05 04:06:47',
                'updated_at' => '2021-12-08 06:18:50',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Jeremy',
                'email' => 'jeremy@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vC2C8hHNGG/090jGTr/e0uxtMzlee8KKtxLbf7NZSEmY5aTKcp/TO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-12-08 06:33:29',
                'updated_at' => '2021-12-08 06:33:56',
            ),
        ));
        
        
    }
}