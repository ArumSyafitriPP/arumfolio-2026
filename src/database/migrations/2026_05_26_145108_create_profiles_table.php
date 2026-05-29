<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('role');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->json('tech_stack')->nullable();
            $table->string('project_title')->nullable();
            $table->string('project_subtitle')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn([
                'project_title',
                'project_subtitle'
            ]);
        });
    }
};