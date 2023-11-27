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
        \App\Models\Customer::factory()->count(30)->create();
        \App\Models\User::factory()->count(20)->create();
        \App\Models\Payment::factory()->count(5)->create();
        


    }

}

