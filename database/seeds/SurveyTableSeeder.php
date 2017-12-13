<?php

use Illuminate\Database\Seeder;

class SurveyTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            'description' => 'surveyDesc1',
            'user_id' => '1',
        ]);
        DB::table('surveys')->insert([
            'description' => 'surveyDesc2',
            'user_id' => '2',
        ]);
    }
}
