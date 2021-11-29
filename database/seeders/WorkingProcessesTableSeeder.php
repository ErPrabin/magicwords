<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkingProcessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('working_processes')->delete();

        \DB::table('working_processes')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Product Consultation',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:53:24',
                'updated_at' => '2021-11-29 15:53:24',
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Security Consultation',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:53:40',
                'updated_at' => '2021-11-29 15:53:40',
            ),
            2 =>
            array(
                'id' => 3,
                'title' => '24/7 Technical Support',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'image' => NULL,
                'sort' => 1,
                'created_at' => '2021-11-29 15:54:00',
                'updated_at' => '2021-11-29 15:54:00',
            ),
        ));
    }
}
