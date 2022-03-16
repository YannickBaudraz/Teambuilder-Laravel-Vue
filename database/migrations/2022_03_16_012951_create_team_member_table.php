<?php

use App\Models\Team;
use App\Models\Member;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('team_member', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Member::class)->constrained();
            $table->foreignIdFor(Team::class)->constrained();
            $table->boolean('is_captain')->default(false);
            $table->timestamps();

            $table->unique(['member_id', 'team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('team_member');
    }
};
