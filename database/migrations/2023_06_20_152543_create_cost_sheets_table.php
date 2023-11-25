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
        Schema::create('cost_sheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->OnUpdate('cascade')->OnDelete('cascade');
            $table->integer('add_amout')->nullable()->default(0);
            $table->integer('cost_amout')->nullable()->default(0);
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
        Schema::dropIfExists('cost_sheets');
    }
};