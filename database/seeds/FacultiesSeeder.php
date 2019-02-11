<?php

use Illuminate\Database\Seeder;

class FacultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	        DB::table('faculties')->insert([
	            'name' =>"VT",
	        ]);

	        DB::table('faculties')->insert([
	            'name' =>"Kiber",
	        ]);

	        DB::table('faculties')->insert([
	            'name' =>"Energo",
	        ]);

	        DB::table('faculties')->insert([
	            'name' =>"Matfak",
	        ]);
    }
}
