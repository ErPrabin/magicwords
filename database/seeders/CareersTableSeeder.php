<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('careers')->delete();
        
        \DB::table('careers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Frontend Developer',
                'slug' => 'frontend-developer',
                'synopsis' => '<p>Build a high-performance iOS and android mobile applications at affordable rates Build a high-performance iOS and android mobile applications at affordable rates</p>',
                'description' => '<h3>Job Description</h3>

<ul>
<li>Build server-side applications with the latest technologies for delivering the best experience&nbsp;for users</li>
<li>Build platforms, frameworks, APIs, libraries &amp; automated tools</li>
<li>Keeping up-to-date with technology</li>
<li>Mentoring and assigning tasks to junior web developers</li>
<li>Client Communication</li>
</ul>

<p>&nbsp;</p>

<h3>Job Requirement</h3>

<ul>
<li>Bachelor&rsquo;s in Computer Science/Engineering</li>
<li>More than or equal to 2 years work experience as web developer</li>
<li>Excellent knowledge of PHP, MySQL, HTML, XHTML, JQuery, JavaScript, XML, Ajax</li>
<li>In depth understanding of at least one PHP Frameworks(Laravel, Cakephp, YII, CI )</li>
<li>Proficient understanding of code versioning tools, such as Git</li>
<li>Ability to quickly grasp new tools and technology</li>
<li>Ability to work under pressure</li>
<li>Fluency in English</li>
<li>Excellent team-working and logical reasoning skills</li>
</ul>

<h3><br />
We are offering:</h3>

<ul>
<li>Attractive Salary (No bar for right and deserving candidate)</li>
<li>Festival Allowances</li>
<li>Annual Performance Review&nbsp;</li>
<li>Flexible timings against performance</li>
<li>Friendly, competitive, and creative working environment</li>
<li>Refreshment Outing</li>
<li>Global exposure and growth opportunities</li>
<li>Accommodation allowances will be given to the candidates outside of Biratnagar.</li>
</ul>',
                'skill' => 'PHP,Laravel,Html,Css,React,JS',
                'sort' => 1,
                'created_at' => '2022-03-04 09:15:57',
                'updated_at' => '2022-03-05 06:40:22',
            ),
        ));
        
        
    }
}