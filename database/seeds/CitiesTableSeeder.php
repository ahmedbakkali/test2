<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();
        DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'casa',
                
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'rabat',
                
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'tanger',
                
            ),
        ));
    }
}
