<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('answers')->insert([
            'answer' => '聽天由命ㄅ',
        ]);
    }
}
