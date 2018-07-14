<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{

    public $table = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->string('phone');
            $table->bigInteger('user_group_id');
            $table->bigInteger('attendant_id');
            $table->dropColumn('name');

            // Keys
            $table->foreign('user_group_id')
                ->references('id')
                ->on('user_groups')
                ->onDelete('cascade');

            $table->foreign('attendant_id')
                ->references('id')
                ->on('attendants')
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
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'user_group_id',
                'attendant_id'
            ]);

            $table->string('name');
        });
    }
}
