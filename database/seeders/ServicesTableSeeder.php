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
                'description' => '<p>By choosing Genius IT - Web Design and development, you are choosing&nbsp;technology that is reliable, usable, adaptable and scalable. The websites developed by Genius IT solutions are planned and designed from the ground-up to provide the best outcome&nbsp;for our clients. Genius IT Solutions is a professional web development company based in Canterbury, NSW. We have been providing top notch web-development services in Australia and Nepal. We approach each project with fresh ideas and our team is focused to create unique custom websites every-time. We have been providing best quality web development&nbsp;services in Canterbury and Kathmandu and have a good reputation of working with reputed companies in Australia and Nepal.</p>

<p>We will make sure the website we develop exceeds your needs and requirements. The features that are used by our team are built considering your present and future objectives on mind. Our web developers will work&nbsp;according to your requirements and expectations. Genius IT Solutions is here to provide striking, high quality,user friendly, professional web-design service for you.</p>

<p><strong>Why Us for Web Development ?</strong></p>

<ul>
<li>We give the best result driven Web Solution</li>
<li>We Specialize in Delivering best quality, dynamic, vibrant, strong, user friendly Websites</li>
<li>Our team has best specialization and experience in making websites</li>
<li>We have extensive knowledge of Programming and Website Design, Development Tools</li>
<li>We will recommend and deliver the best Website Solution for you</li>
</ul>

<h1><strong>Our Process</strong></h1>

<p><strong>The Web Design Briefing</strong></p>

<p>In this stage we develop scope-of-the-work by discussing and focusing on the client&rsquo;s preferences including layout, colors, fonts etc.</p>

<p><strong>Research</strong></p>

<p>We conduct research focused on the client&#39;s business&nbsp;itself, on its history, and on its competitors.</p>

<p><strong>Reference</strong></p>

<p>We conduct research into designs that have been successful and current styles and trends in relation to the design brief.</p>

<p><strong>Mock up</strong></p>

<p>We develop the design concept(s) around the brief and research findings.</p>

<p><strong>Reflection</strong></p>

<p>We set millstones to pause through the design process to take stock of our progress. This lets our ideas mature and allow any correction before we move forward with renewed enthusiasm.</p>

<p><strong>Presentation</strong></p>

<p>In this final step, we then present the client with the final product.</p>',
                'thumbnail' => '20220301135938206480.png',
                'image' => '20220301135938208584.png',
                'sort' => 1,
                'created_at' => '2021-11-29 15:34:15',
                'updated_at' => '2022-03-05 05:31:14',
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