<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('user_activity', function (Blueprint $table) {
            $table->id('no_activity');
            $table->unsignedBigInteger('id_user');
            $table->string('diskripsi', 300);
            $table->string('status', 1);
            $table->timestamp('stand')->useCurrent();
            $table->string('delete_mark', 1)->default('N');
            $table->timestamps();

           $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_activity');
    }
};
