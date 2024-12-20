<?php

use App\Models\Department;
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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('qualification')->nullable(false);
            $table->text('responsibility')->nullable(false);
            $table->enum('type', ['full_time', 'part_time', 'intern'])->nullable(false);
            $table->integer('position')->nullable(false);
            $table->dateTime('created')->nullable(false)->useCurrent();
            $table->dateTime('expired')->nullable(false);
            $table->enum('status', ['active', 'draft', 'expired'])->nullable(false)->default('draft');
            $table->foreignIdFor(Department::class);
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');

    }
};
