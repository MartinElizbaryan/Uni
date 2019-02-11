<?php

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' =>"V1",
            'faculty_id' => 1
        ]);

        DB::table('groups')->insert([
            'name' =>"V2",
            'faculty_id' => 1
        ]);

        DB::table('groups')->insert([
            'name' =>"V3",
            'faculty_id' => 1
        ]);

        DB::table('groups')->insert([
            'name' =>"K1",
            'faculty_id' => 2
        ]);

        DB::table('groups')->insert([
            'name' =>"K2",
            'faculty_id' => 2
        ]);

        DB::table('groups')->insert([
            'name' =>"E1",
            'faculty_id' => 3
        ]);

        DB::table('groups')->insert([
            'name' =>"M1",
            'faculty_id' => 4
        ]);
    }
}
