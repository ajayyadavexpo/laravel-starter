<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailsettings', function (Blueprint $table) {
            $table->id();
            $table->string('mail_transport');
            $table->string('mail_host');
            $table->string('mail_port');
            $table->string('mail_username');
            $table->string('mail_password');
            $table->string('mail_encryption');
            $table->string('mail_from');
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
        Schema::dropIfExists('mailsettings');
    }
}
