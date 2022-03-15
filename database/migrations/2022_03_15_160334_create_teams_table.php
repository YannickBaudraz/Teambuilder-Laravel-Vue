<?php

use App\Enums\TeamState;
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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->unique();
            $table->enum('state', [
                TeamState::WAIT_CHANG->value,
                TeamState::WAIT_VAL->value,
                TeamState::VALIDATED->value,
                TeamState::COMMITTED->value,
                TeamState::RECRUITING->value,
            ])->default(TeamState::WAIT_CHANG->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
