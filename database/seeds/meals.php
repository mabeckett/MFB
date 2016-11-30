<?php

use Illuminate\Database\Seeder;

class meals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('mfb')->insert([
        	'name' => 'Jell-o',
        	'calories' => 85

        ]);
    }
}
