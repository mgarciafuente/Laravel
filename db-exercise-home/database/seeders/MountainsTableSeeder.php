<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MountainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mountains')->insert([
            'name' => 'Everest',
            'height' => 8849,
            'belongsToRange' => true,
            'firstClimbDate' => '1953-05-29',
            'continent' => 'Asia',         
        ]);
    }
}
