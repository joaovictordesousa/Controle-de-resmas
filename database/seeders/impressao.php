<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class impressao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        impressao::create([
            'impressora'=> 'PRES_ASCOM_EPSON_MONO'
        ]);
    }
}
