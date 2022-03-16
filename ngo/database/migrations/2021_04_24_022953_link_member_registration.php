<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinkMemberRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LinkMemberRegistration', function (Blueprint $table) {
            $table->id('PAYID');
            $table->string('RegNo');
            $table->timestamp('Reg_Year');
            $table->integer('Amount');
            $table->string('Transaction No','40');
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
        Schema::dropIfExists('LinkMemberRegistration');
    }
}
