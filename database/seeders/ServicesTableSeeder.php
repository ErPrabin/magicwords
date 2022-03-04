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
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'thumbnail' => '20220301135938206480.png',
                'image' => '20220301135938208584.png',
                'sort' => 1,
                'created_at' => '2021-11-29 15:34:15',
                'updated_at' => '2022-03-01 13:59:53',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Software Development',
                'slug' => 'software-development',
                'synopsis' => '<p>Get a robust and user-friendly software that solves your business problems Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Get a robust and user-friendly software that solves your business problems</p>',
                'thumbnail' => '20220301135442831443.png',
                'image' => '20220301135442834748.png',
                'sort' => 1,
                'created_at' => '2021-11-29 15:34:37',
                'updated_at' => '2022-03-01 13:54:42',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Web App development',
                'slug' => 'web-app-development',
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'thumbnail' => '20220301135544459773.png',
                'image' => '20220301135544461567.png',
                'sort' => 1,
                'created_at' => '2021-11-29 15:35:07',
                'updated_at' => '2022-03-01 13:55:44',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'thumbnail' => '20220301135633277484.png',
                'image' => '20220301135633279405.png',
                'sort' => 1,
                'created_at' => '2022-03-01 13:56:33',
                'updated_at' => '2022-03-01 13:56:33',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Copy Writing',
                'slug' => 'copy-writing',
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'thumbnail' => '20220301135825361951.png',
                'image' => '20220301135825363631.png',
                'sort' => 1,
                'created_at' => '2022-03-01 13:58:25',
                'updated_at' => '2022-03-01 13:58:25',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Graphic Designing',
                'slug' => 'graphic-designing',
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<p>Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'thumbnail' => '20220301135915366337.png',
                'image' => '20220301135915368125.png',
                'sort' => 1,
                'created_at' => '2022-03-01 13:59:15',
                'updated_at' => '2022-03-01 13:59:15',
            ),
        ));
        
        
    }
}