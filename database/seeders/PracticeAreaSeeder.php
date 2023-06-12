<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PracticeAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('practice_areas')->insert([
            'title' => 'Civil'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Extrajudicial'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Extranjería'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Familia'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Laboral'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Mediación'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Penal'
        ]);

        DB::table('practice_areas')->insert([
            'title' => 'Policia local'
        ]);
    }
}
