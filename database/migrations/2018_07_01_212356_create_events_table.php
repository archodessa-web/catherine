<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{

    public $table = 'events';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->time('start_time')
                ->nullable();
            $table->time('end_time')
                ->nullable();
            $table->unsignedTinyInteger('attendant_limit')
                ->nullable();
            $table->unsignedDecimal('early_price', 6, 2)
                ->nullable();
            $table->unsignedDecimal('regular_price', 6, 2)
                ->nullable();
            $table->text('description')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
