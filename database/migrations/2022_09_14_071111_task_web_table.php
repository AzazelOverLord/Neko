<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_task', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');

            $table->unsignedBigInteger('id_project_manager')->nullable();
            $table->index('id_project_manager', 'id_project_manager_ind');
            $table->foreign('id_project_manager', 'id_project_manager_fk')->on('users')->references('id');

            $table->unsignedBigInteger('id_user')->nullable();
            $table->index('id_user', 'id_user_ind');
            $table->foreign('id_user', 'id_user_fk')->on('users')->references('id');

            $table->float('all_price');
            $table->float('user_price');
            $table->timestamp('dead_line',0)->useCurrent();
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
        //
    }
}
