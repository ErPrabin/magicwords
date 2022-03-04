<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Incredible Infrastructure',
                'description' => '<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>',
                'fa_icon' => 'fa-industry',
                'sort' => 1,
                'created_at' => '2022-03-03 11:01:18',
                'updated_at' => '2022-03-04 06:54:33',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Email Notifications',
                'description' => '<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>',
                'fa_icon' => 'fa-envelope',
                'sort' => 1,
                'created_at' => '2022-03-03 11:01:38',
                'updated_at' => '2022-03-04 06:50:53',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Simple Dashboard',
                'description' => '<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>',
                'fa_icon' => 'fa-database',
                'sort' => 1,
                'created_at' => '2022-03-03 11:01:56',
                'updated_at' => '2022-03-04 06:55:26',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Information Retrieval',
                'description' => '<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>',
                'fa_icon' => 'fa-info-circle',
                'sort' => 1,
                'created_at' => '2022-03-03 11:02:15',
                'updated_at' => '2022-03-04 06:53:48',
            ),
        ));
        
        
    }
}