<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad'); 
            $table->timestamps();        
        });
    }
    /*php artisan migrate para ejecutar las migraciones*/ 
    /** php artisan migrate:rollback elimina las tablas */
     /**describe tests; para ver la informacion de una tabla especifica tests es una tablaphp */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
