<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Irving Gerardo',
            'email' => 'irving@gmail.com',
            'password' => bcrypt('password')
        ]);

        // factory(App\User::class, 10)->create();
        \App\Models\User::factory()->count(10)->create();
    }
}
