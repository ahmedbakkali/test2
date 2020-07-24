<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->truncate();
        DB::table('partners')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'mohamed',
                'citie_id' => '1',

                
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'hassan',
                'citie_id' => '2',
                
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'nada',
                'citie_id' => '3',
                
            ),
        ));
    }
}
