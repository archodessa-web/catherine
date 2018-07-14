<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstallPointSupport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->bigInteger('point_id')->nullable();

            // Keys
            $table->foreign('point_id')
                ->references('id')
                ->on('points')
                ->onDelete('cascade');
        });

        Schema::table('schedule_items', function (Blueprint $table) {
            $table->bigInteger('point_id')
                ->nullable();

            // Keys
            $table->foreign('point_id')
                ->references('id')
                ->on('points')
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
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('point_id');
        });

        Schema::table('schedule_items', function (Blueprint $table) {
            $table->dropColumn('point_id');
        });
    }
}
