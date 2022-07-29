<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligas', function (Blueprint $table) {
            $table->id();
            $table->enum('liga',['esp','ing','fra','ale']);
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table("ligas")
            ->insert([
                [
                    "liga" => "esp",
                    "nombre" => "Espanola",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "liga" => "ing",
                    "nombre" => "Inglesa",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "liga" => "fra",
                    "nombre" => "Francesa",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "liga" => "ale",
                    "nombre" => "Alemana",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_ligas');
    }
}
