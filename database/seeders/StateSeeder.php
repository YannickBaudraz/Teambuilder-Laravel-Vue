<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        State::insert(
            [
                ['slug' => 'WAIT_CHANG'],
                ['slug' => 'WAIT_VAL'],
                ['slug' => 'VALIDATED'],
                ['slug' => 'COMMITTED'],
                ['slug' => 'RECRUITING'],
            ]
        );
    }
}
