<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Caso;

class CasosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caso::create([
            'nomeCaso'=>'Operação Zap',
            'titular'=>'Dr. Mauro',
            'category_id'=>1
        ]);
    }
}
