<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->foreignId('team_id');
            $table->string('added_by');
            $table->string('last_modified_by')->nullable();
            $table->string('name');
            $table->string('unit');
            $table->string('category');
            $table->float('price');
            $table->float('quantity');
            $table->string('description');
            $table->string('product_photo_path')->nullable();
            $table->timestamps();

            $table->foreign('team_id')
                        ->references('id')
                            ->on('teams')
                            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
