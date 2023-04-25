<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('companies', static function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->text('street');
            $table->text('city');
            $table->text('zip');
            $table->text('phone');
            $table->text('email');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
