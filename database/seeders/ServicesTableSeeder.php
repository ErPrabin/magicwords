<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Content Writting',
                'slug' => 'content-writting',
                'synopsis' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'thumbnail' => NULL,
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:34:15',
                'updated_at' => '2021-11-29 15:34:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Security',
                'slug' => 'security',
                'synopsis' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'thumbnail' => NULL,
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:34:37',
                'updated_at' => '2021-11-29 15:34:37',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Web and Mobile app development',
                'slug' => 'web-and-mobile-app-development',
                'synopsis' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>',
                'thumbnail' => NULL,
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:35:07',
                'updated_at' => '2021-11-29 15:35:07',
            ),
        ));
        
        
    }
}