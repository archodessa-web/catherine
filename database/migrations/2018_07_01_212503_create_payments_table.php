<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action')
                ->nullable();
            $table->string('status')
                ->nullable();
            $table->decimal('amount', 6, 2)
                ->nullable();
            $table->char('currency', 3)
                ->nullable();
            $table->dateTime('completion_date')
                ->nullable();
            $table->dateTime('creation_date')
                ->nullable();
            $table->dateTime('end_date')
                ->nullable();
            $table->string('description')
                ->nullable();
            $table->string('liqpay_order_id')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
