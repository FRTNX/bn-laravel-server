<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('description', 255);
            $table->string('group');
            $table->string('category', 255);
            $table->string('program');
            $table->string('sub_program', 255);
            $table->string('department');
            $table->string('unit_of_measure', 255);
            $table->string('period');
            $table->string('quantity', 255);
            $table->string('unit_price');
            $table->string('total_exclusive', 255);
            $table->string('vat');
            $table->string('total_inclusive', 255);
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
        Schema::dropIfExists('budgets');
    }
}
