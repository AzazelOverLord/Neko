<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_call', function (Blueprint $table) {
            $table->id();
            $table->integer('name_company');
            $table->string('contact_user');
            $table->string('contact_phone');
            $table->integer('maket')->default('0');
            $table->integer('need_maket')->default('0');
            $table->integer('status')->default('0');
            $table->string('status_call');
            $table->string('status_bid');
            $table->text('description');
            $table->integer('id_tarif')->default('0');
            $table->integer('price');
            $table->integer('go_pm')->default('0');
            $table->timestamp('date_call',0)->useCurrent();
            $table->timestamp('date_meet',0)->useCurrent();
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
