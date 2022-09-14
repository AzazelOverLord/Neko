<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_option', function (Blueprint $table) {
            $table->id();
            $table->string('name_app');
            $table->string('logo');
            $table->string('mailserver_smtp');
            $table->string('mailserver_url');
            $table->string('mailserver_login');
            $table->string('mailserver_pass');
            $table->string('demos_path');
            $table->string('sql_user_on_host');
            $table->string('sql_pass_on_host');
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
