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
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table("ligas")
            ->insert([
                [
                    "nombre" => "Espanola",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "nombre" => "Inglesa",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "nombre" => "Francesa",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "nombre" => "Alemana",
                    "created_at" => Now(),
                    "updated_at" => Now()
                ]
                ,[
                    "nombre" => "Italiana",
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
