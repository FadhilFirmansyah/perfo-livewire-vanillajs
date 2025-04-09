<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 10000;
        $total = 1_000_000;

        for ($i = 0; $i < $total / $batchSize; $i++) {
            \App\Models\Perfo::factory()->count($batchSize)->create();
            echo "Seeded " . ($i + 1) * $batchSize . " records...\n";
        }
    }
}
