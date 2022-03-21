<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->references('id')->on('loans')->onDelete('cascade');
            $table->string('username')->unique();
            $table->string('nama');
            $table->string('nis');
            $table->enum('kelas', [10, 11, 12, 13]);
            $table->enum('jurusan', ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS']);
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->enum('agama', ['Islam', 'Kristen', 'Buddha', 'Hindu']);
            $table->enum('role', ['admin', 'siswa']);
            $table->string('gambar_user')->default('user.png');
            $table->integer('denda')->nullable()->default(0);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
