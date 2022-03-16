<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class TeamMemberSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Team::all()->each(function (Team $team) {
            for ($i = 0; $i < 5; $i++) {
                try {
                    DB::table('team_member')->insert([
                        'member_id'  => Member::all()->random()->id,
                        'team_id'    => $team->id,
                        'is_captain' => $i === 1,
                    ]);
                } catch (QueryException $e) {
                    logger($e);
                }
            }
        });
    }
}
