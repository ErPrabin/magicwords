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
                'image' => '20220302042552515553.jpg',
                'sort' => 1,
                'created_at' => '2022-03-02 04:25:52',
                'updated_at' => '2022-03-02 04:25:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'designation' => 'Developers',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-02 04:30:46',
                'updated_at' => '2022-03-02 04:30:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Prabin Shrestha',
                'designation' => 'Laravel',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-02 04:33:17',
                'updated_at' => '2022-03-02 04:33:17',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jack Julie',
                'designation' => 'CEO',
                'description' => '<p>Our service offerings enhance customer experience throughout secure &amp; highly functional end-to-end warranty management.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-02 04:49:17',
                'updated_at' => '2022-03-02 04:49:17',
            ),
        ));
        
        
    }
}