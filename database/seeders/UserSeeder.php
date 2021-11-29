<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'admin@gmail.com')->first()) {
            User::create([
                'name' => config('app.name'),
                'email' => 'admin@gmail.com',
                'password' => bcrypt('test1234')
            ]);
        }
    }
}
