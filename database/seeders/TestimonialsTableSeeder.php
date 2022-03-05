<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Prabin Shrestha',
                'designation' => 'Engineer',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => '20220305063054567012.jpg',
                'sort' => 1,
                'created_at' => '2022-03-02 04:25:52',
                'updated_at' => '2022-03-05 06:30:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'designation' => 'Developers',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => '20220305062959674100.jpg',
                'sort' => 1,
                'created_at' => '2022-03-02 04:30:46',
                'updated_at' => '2022-03-05 06:29:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Prabin Shrestha',
                'designation' => 'Laravel',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => '20220305063105422138.jpg',
                'sort' => 1,
                'created_at' => '2022-03-02 04:33:17',
                'updated_at' => '2022-03-05 06:31:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jack Julie',
                'designation' => 'CEO',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => '20220305063042962702.jpg',
                'sort' => 1,
                'created_at' => '2022-03-02 04:49:17',
                'updated_at' => '2022-03-05 06:30:43',
            ),
        ));
        
        
    }
}