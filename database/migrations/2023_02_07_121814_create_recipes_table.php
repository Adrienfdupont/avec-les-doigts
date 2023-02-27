<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image');
            $table->enum('difficulty', [1, 2, 3]);
            $table->enum('cost', ["bon marché", "abordable", "onéreux"]);
            $table->enum('time', ['< 15 min', '< 30 min', '< 45 min', '< 1 h', '> 1 h']);
            $table->enum('note', [1, 2, 3, 4, 5])->nullable();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('recipes');
    }
};
