<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MountainsTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mountains')->insert([
            'name' => 'K2',
            'height' => 8610,
            'belongsToRange' => true,
            'firstClimbDate' => '1954-07-31',
            'continent' => 'Asia',
        ]);
    }
}
