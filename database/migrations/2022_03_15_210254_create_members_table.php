<?php

use App\Enums\MemberRole;
use App\Enums\MemberStatus;
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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('password');
            $table->enum('role', $this->getRoles())->default(MemberRole::MEM->value);
            $table->enum('status', $this->getStatus())->default(MemberStatus::ACTIVE->value);
            $table->rememberToken();
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
        Schema::dropIfExists('members');
    }

    /**
     * @return array
     */
    private function getStatus(): array
    {
        return [
            MemberStatus::ACTIVE->value,
            MemberStatus::INACTIVE->value,
            MemberStatus::BANNED->value,
        ];
    }

    /**
     * @return array
     */
    private function getRoles(): array
    {
        return [
            MemberRole::MEM->value,
            MemberRole::MOD->value,
        ];
    }
};
