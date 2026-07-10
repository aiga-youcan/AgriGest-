<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('parcelles', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('culture');
        $table->decimal('superficie', 8, 2);
        $table->date('date_plantation');
        $table->enum('statut', ['En culture', 'Récoltée', 'En jachère']);
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
        Schema::dropIfExists('parcelles');
    }
}
