<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mms', function (Blueprint $table) {
            $table->id();
            $table->date('add_date');
            $table->string('item');
            $table->decimal('item_code');
            $table->decimal('quantity');
            $table->decimal('weight');
            $table->string('batch_number');
            $table->date('pr_data');
            $table->date('xpe_date');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('mms');
    }
}
