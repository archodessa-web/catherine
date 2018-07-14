<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedTinyInteger('attendant_limit')
                ->nullable();
            $table->unsignedDecimal('early_price', 6, 2);
            $table->unsignedDecimal('regular_price', 6, 2);
            $table->bigInteger('event_id');
            $table->text('description')
                ->nullable();
            $table->timestamps();

            // Keys
            $table->foreign('event_id')
                ->references('id')
                ->on('events')
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
        Schema::dropIfExists('schedule_items');
    }
}
