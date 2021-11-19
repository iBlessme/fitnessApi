<?php

namespace Database\Seeders;

use App\Models\Abonement;
use App\Models\BonusProgramm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // BonusProgramm::factory(3) -> create();
        Abonement::factory(3) -> create();
    }
}
