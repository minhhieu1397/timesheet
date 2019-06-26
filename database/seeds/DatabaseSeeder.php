<?php

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
         DB::table('timesheet')->insert([
            'name' => str_random(10),
            '_date' => str_random(10),
            '_work' => str_random(10),
            'difficulty' => str_random(10),
            'intention' => str_random(10),
            'late' => 1
        ]);
    }
}
