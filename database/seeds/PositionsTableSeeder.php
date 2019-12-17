<?php

use Illuminate\Database\Seeder;
use App\Position;
class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'position' => 'Dono',
            'position' => 'Administrador',
            'position' => 'Vendedor',
        ]);
    }
}
