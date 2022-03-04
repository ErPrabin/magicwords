<?php

namespace Database\Seeders;

use App\Models\MetaTag;
use App\Models\Service;
use Illuminate\Database\Seeder;

class MetaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('custom.pages') as $p) {
            foreach (config('custom.meta_dropdown') as $m) {
                if (!MetaTag::where('page', $p)->where('meta_name', $m)->first()) {
                    MetaTag::create([
                        'page' => $p,
                        'meta_name' => $m,
                        'meta_content' => ucwords(str_replace('-', ' ', $p)) . ' | ' . config('app.name')
                    ]);
                }
            }
        }
        foreach (Service::get() as $p) {
            foreach (config('custom.meta_dropdown') as $m) {
                if (!MetaTag::where('page', $p->slug)->where('meta_name', $m)->first()) {
                    MetaTag::create([
                        'page' => $p->slug,
                        'meta_name' => $m,
                        'meta_content' => ucwords(str_replace('-', ' ', $p->slug)) . ' | ' . config('app.name')
                    ]);
                }
            }
        }
    }
}
