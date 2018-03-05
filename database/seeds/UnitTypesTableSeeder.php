<?php

use Illuminate\Database\Seeder;

class UnitTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_types')->insert(array
            (
                [
                    'name'          =>  'kg',
                    'description'   =>  'Kilogram',
                    'created_at'    =>  date('Y-m-d H:i:s'),
                    'updated_at'    =>  date('Y-m-d H:i:s'),
                ],
                [
                    'name'          =>  'gal',
                    'description'   =>  'Gallon',
                    'created_at'    =>  date('Y-m-d H:i:s'),
                    'updated_at'    =>  date('Y-m-d H:i:s'),
                ],
                [
                    'name'          =>  'pcs',
                    'description'   =>  'Pieces',
                    'created_at'    =>  date('Y-m-d H:i:s'),
                    'updated_at'    =>  date('Y-m-d H:i:s'),
                ],
                [
                    'name'          =>  'bot',
                    'description'   =>  'Bottle',
                    'created_at'    =>  date('Y-m-d H:i:s'),
                    'updated_at'    =>  date('Y-m-d H:i:s'),
                ]
            )
        );
    }
}
