<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Metode yang akan dijalankan saat migrasi diterapkan
    public function up()
    {
        Schema::create('u_student', function (Blueprint $table) {
            $table->id();//Mendefinisikan kolom 'id' sebagai primary key yang otomatis bertambah
            $table->string('nama');//Mendefinisikan kolom 'nama' dengan tipe data string
            $table->string('kelas');//Mendefinisikan kolom 'kelas' dengan tipe data string
            $table->string('alamat');//Mendefinisikan kolom 'alamat' dengan tipe data string
            $table->timestamps();//Mendefinisikan dua kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('u__student_models');
    }
}
