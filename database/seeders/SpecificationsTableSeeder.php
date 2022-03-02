<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specifications')->delete();
        
        \DB::table('specifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Great Advice',
                'description' => '<p>Our team is here to develop simple to complex websites based</p>',
                'fa_icon' => 'fa-comments',
                'sort' => 1,
                'created_at' => '2022-03-02 05:55:36',
                'updated_at' => '2022-03-02 06:25:51',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '24/7 Support',
                'description' => '<p>Our team is here to develop simple to complex websites based</p>',
                'fa_icon' => 'fa-headset',
                'sort' => 1,
                'created_at' => '2022-03-02 05:55:51',
                'updated_at' => '2022-03-02 06:22:01',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Optimal Choice',
                'description' => '<p>Our team is here to develop simple to complex websites based</p>',
                'fa_icon' => 'fa-list',
                'sort' => 1,
                'created_at' => '2022-03-02 05:56:08',
                'updated_at' => '2022-03-02 06:35:50',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Market Analysis',
                'description' => '<p>Our team is here to develop simple to complex websites based</p>',
                'fa_icon' => 'fa-chart-area',
                'sort' => 1,
                'created_at' => '2022-03-02 05:56:20',
                'updated_at' => '2022-03-02 06:34:28',
            ),
        ));
        
        
    }
}