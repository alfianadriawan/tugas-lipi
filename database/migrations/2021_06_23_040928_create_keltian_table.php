<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeltianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keltian', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('avatar')->nullable();
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('password');
            $table->longText('alamat');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('keltian');
    }
}
