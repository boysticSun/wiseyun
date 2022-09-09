<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$gGN3k5SvcvbWlr.5zpqiCuL5/tXTvPn0X30ZbzAU3BkxUArKPB24y',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:22:36',
            ),
        ));
        
        
    }
}