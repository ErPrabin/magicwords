<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WhyChooseUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('why_choose_us')->delete();

        \DB::table('why_choose_us')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Product Consultation',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'sort' => 1,
                'created_at' => '2021-11-29 15:53:24',
                'updated_at' => '2021-11-29 15:53:24',
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Security Consultation',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'sort' => 1,
                'created_at' => '2021-11-29 15:53:40',
                'updated_at' => '2021-11-29 15:53:40',
            ),
            2 =>
            array(
                'id' => 3,
                'title' => '24/7 Technical Support',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'sort' => 1,
                'created_at' => '2021-11-29 15:54:00',
                'updated_at' => '2021-11-29 15:54:00',
            ),
            3 =>
            array(
                'id' => 4,
                'title' => 'Web Security',
                'description' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>',
                'sort' => 1,
                'created_at' => '2021-11-29 15:54:00',
                'updated_at' => '2021-11-29 15:54:00',
            ),
        ));
    }
}
