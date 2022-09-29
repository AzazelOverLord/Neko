<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientsSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_site', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_company')->nullable();
            $table->index('id_company', 'id_company_ind');
            $table->foreign('id_company', 'id_company_fk')->on('clients')->references('id');
            $table->string('url');
            $table->integer('active');
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
