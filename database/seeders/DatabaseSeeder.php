<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ComponentSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MetaTagSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(WhyChooseUsTableSeeder::class);
        $this->call(WorkingProcessesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
    }
}
