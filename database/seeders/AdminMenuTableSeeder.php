<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'feather icon-settings',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => 'fa-user-circle',
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:32:38',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => 'fa-users',
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:32:54',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => 'fa-key',
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:33:06',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => 'fa-align-justify',
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:33:28',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Extensions',
                'icon' => 'fa-external-link',
                'uri' => 'auth/extensions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:22:36',
                'updated_at' => '2022-09-08 17:34:18',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'User',
                'icon' => 'fa-user-o',
                'uri' => NULL,
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:34:41',
                'updated_at' => '2022-09-08 17:34:41',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 8,
                'order' => 9,
                'title' => 'Usertype',
                'icon' => 'fa-user-md',
                'uri' => '/usertypes',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:35:27',
                'updated_at' => '2022-09-08 17:36:26',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 8,
                'order' => 10,
                'title' => 'Userlist',
                'icon' => 'fa-list',
                'uri' => '/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:37:06',
                'updated_at' => '2022-09-08 17:37:06',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 11,
                'title' => 'News',
                'icon' => 'fa-newspaper-o',
                'uri' => NULL,
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:40:12',
                'updated_at' => '2022-09-08 17:40:12',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 11,
                'order' => 12,
                'title' => 'Newscategory',
                'icon' => 'fa-align-justify',
                'uri' => '/newscategories',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:41:45',
                'updated_at' => '2022-09-08 17:41:45',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 13,
                'title' => 'Newslist',
                'icon' => 'fa-list',
                'uri' => '/news',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:42:20',
                'updated_at' => '2022-09-08 17:42:47',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 14,
                'title' => 'Market',
                'icon' => 'fa-shopping-bag',
                'uri' => NULL,
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:45:22',
                'updated_at' => '2022-09-08 17:45:22',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 14,
                'order' => 15,
                'title' => 'Supply',
                'icon' => 'fa-truck',
                'uri' => '/supplies',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:46:32',
                'updated_at' => '2022-09-08 17:46:32',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 14,
                'order' => 16,
                'title' => 'Purchase',
                'icon' => 'fa-shopping-basket',
                'uri' => '/purchases',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:47:40',
                'updated_at' => '2022-09-08 17:47:40',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 17,
                'title' => 'Order',
                'icon' => 'fa-list-alt',
                'uri' => NULL,
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:48:34',
                'updated_at' => '2022-09-08 17:48:34',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 17,
                'order' => 18,
                'title' => 'Supplyorder',
                'icon' => 'fa-list-ul',
                'uri' => '/supplyorders',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:49:25',
                'updated_at' => '2022-09-08 17:49:25',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 17,
                'order' => 19,
                'title' => 'Purchaseorder',
                'icon' => 'fa-list-ul',
                'uri' => '/purchaseorders',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-09-08 17:50:19',
                'updated_at' => '2022-09-08 17:50:19',
            ),
        ));
        
        
    }
}