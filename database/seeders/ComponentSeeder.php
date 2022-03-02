<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'About Us',
            'Overview',
            'Why Choose Us',
            'Address',
            'Contact Number',
            'Email',
            'Receiving email address',
            'Facebook Link',
            'Twitter Link',
            'Linkedin Link',
            'Home Banner',
            'Our Experience',
            'Service',
            'Technology',
            'Feature',
            'Contact Banner',
        ];
        $arr = [];
        foreach ($datas as $d) {
            $c = Component::where('slug', Str::slug($d))->first();
            if (!$c) {
                $c = Component::create([
                    'title' => $d,
                    'slug' => Str::slug($d),
                    'synopsis' => $d,
                    'description' => $d,
                    'image' => null,
                    'sort' => 1,
                ]);
            }
            array_push($arr, $c->id);
        }
        Component::whereNotIn('id', $arr)->delete();
    }
}
