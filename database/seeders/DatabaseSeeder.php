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
        \App\Models\User::factory(10)->create();
        \App\Models\compania::factory(10)->create();
        \App\Models\cohete::factory(10)->create();
        \App\Models\planeta::factory(10)->create();
        \App\Models\viaje::factory(10)->create();
    }
}
