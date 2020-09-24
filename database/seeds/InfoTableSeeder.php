<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert([
            'visi' => Str::random(30),
            'misi' => Str::random(30),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
