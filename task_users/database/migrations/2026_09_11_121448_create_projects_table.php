<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('costs');
            $table->integer('time');
            $table->foreignId('manager_id')->constrained('users');
            $table->timestamps();
        });
        Project::create([
        'name' => 'Project 1',
        'costs' => 1000,
        'time' => 10,
        'manager_id' => 1
        ]);
        Project::create([
        'name' => 'Project 2',
        'costs' => 2000,
        'time' => 20,
        'manager_id' => 2
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
