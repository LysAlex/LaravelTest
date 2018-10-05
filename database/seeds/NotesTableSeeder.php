<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'nom' => str_random(5),
            'matiere' => 'Maths',
            'notes' => rand(0,20),
        ]);
    }
}
