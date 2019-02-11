<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' =>"Andranik",
            'lastname' =>"Andranikyan",
            'phone' => "093-123-456",
            'group_id' => 1,
        ]);

        DB::table('students')->insert([
            'name' =>"Hakob",
            'lastname' =>"Hakobyan",
            'phone' => "093-123-456",
            'group_id' => 1,
        ]);

        DB::table('students')->insert([
            'name' =>"David",
            'lastname' =>"Davdyan",
            'phone' => "093-123-456",
            'group_id' => 2,
        ]);

        DB::table('students')->insert([
            'name' =>"Hovhannes",
            'lastname' =>"Hovhannisyan",
            'phone' => "093-123-456",
            'group_id' => 3,
        ]);

        DB::table('students')->insert([
            'name' =>"Valod",
            'lastname' =>"Valodyan",
            'phone' => "093-123-456",
            'group_id' => 4,
        ]);

        DB::table('students')->insert([
            'name' =>"Hovhannes",
            'lastname' =>"Hovhannisyan",
            'phone' => "093-123-456",
            'group_id' => 4,
        ]);

        DB::table('students')->insert([
            'name' =>"Valod",
            'lastname' =>"Valodyan",
            'phone' => "093-123-456",
            'group_id' => 5,
        ]);

        DB::table('students')->insert([
            'name' =>"Hovhannes",
            'lastname' =>"Hovhannisyan",
            'phone' => "093-123-456",
            'group_id' => 6,
        ]);

        DB::table('students')->insert([
            'name' =>"Valod",
            'lastname' =>"Valodyan",
            'phone' => "093-123-456",
            'group_id' => 7,
        ]);
    }
}
