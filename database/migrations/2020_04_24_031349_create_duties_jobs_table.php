<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDutiesJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duties_jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('duty_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('job_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duties_jobs');
    }
}
