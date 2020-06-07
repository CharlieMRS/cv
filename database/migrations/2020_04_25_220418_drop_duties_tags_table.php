<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropDutiesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::drop('duties_tags');

        Schema::table('duties', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('set null');
        });
    }
}
