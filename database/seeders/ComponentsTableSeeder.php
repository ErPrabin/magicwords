<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('components')->delete();
        
        \DB::table('components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'About Us',
                'slug' => 'about-us',
                'synopsis' => '<p>About Us</p>',
                'description' => '<p>Magic Words&nbsp;is a software development and IT consultancy company located in Nepal. We are specialized in providing IT solutions that improve and transform the way businesses work.&nbsp;Magic Words&nbsp;is a software development and IT consultancy company located in Nepal. We are specialized in providing IT solutions that improve and transform the way businesses work.&nbsp;Magic Words&nbsp;is a software development and IT consultancy company located in Nepal. We are specialized in providing IT solutions that improve and transform the way businesses work.&nbsp;</p>',
                'image' => '20220305062903864223.png',
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:29:03',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Why Choose Us',
                'slug' => 'why-choose-us',
                'synopsis' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'description' => '<p>Why Choose Us</p>',
                'image' => '20220305063309825663.png',
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:33:09',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Address',
                'slug' => 'address',
                'synopsis' => 'Address',
                'description' => 'Address',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Contact Number',
                'slug' => 'contact-number',
                'synopsis' => 'Contact Number',
                'description' => 'Contact Number',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Email',
                'slug' => 'email',
                'synopsis' => 'Email',
                'description' => 'Email',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Receiving email address',
                'slug' => 'receiving-email-address',
                'synopsis' => '<p>Receiving email address</p>',
                'description' => '<p>test@gmail.com</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 09:32:25',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Facebook Link',
                'slug' => 'facebook-link',
                'synopsis' => 'Facebook Link',
                'description' => 'Facebook Link',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Twitter Link',
                'slug' => 'twitter-link',
                'synopsis' => 'Twitter Link',
                'description' => 'Twitter Link',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Linkedin Link',
                'slug' => 'linkedin-link',
                'synopsis' => 'Linkedin Link',
                'description' => 'Linkedin Link',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Home Banner',
                'slug' => 'home-banner',
                'synopsis' => '<p>Offering you the best digital products and services</p>',
                'description' => '<p>Magic Words&nbsp;is a software development and IT consultancy company located in Nepal. We are specialized in providing IT solutions that improve and transform the way businesses work.&nbsp;</p>',
                'image' => '20220305054936312791.png',
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 05:49:36',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Service',
                'slug' => 'service',
                'synopsis' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'description' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:32:16',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Technology',
                'slug' => 'technology',
                'synopsis' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'description' => '<p>Technology</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:32:30',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Feature',
                'slug' => 'feature',
                'synopsis' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'description' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:31:55',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Contact Banner',
                'slug' => 'contact-banner',
                'synopsis' => 'Contact Banner',
                'description' => 'Contact Banner',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-04 08:58:56',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Testimonial',
                'slug' => 'testimonial',
                'synopsis' => '<p>For your very specific industry, we have highly-tailored IT solutions.</p>',
                'description' => '<p>Testimonial</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:32:41',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Career',
                'slug' => 'career',
                'synopsis' => '<p>Career</p>',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'image' => '20220305063604450193.png',
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:36:04',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Map',
                'slug' => 'map',
                'synopsis' => '<p>Map</p>',
                'description' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.608375247543!2d85.32094832718097!3d27.71748151244351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1646462476112!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2022-03-04 08:58:56',
                'updated_at' => '2022-03-05 06:41:50',
            ),
        ));
        
        
    }
}