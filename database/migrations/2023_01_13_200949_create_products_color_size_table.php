<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        if (!Schema::hasTable('products_color_size')) {

        Schema::create('products_color_size', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('quantity');
            $table->decimal('price',10,2)->nullable();
            $table->integer('status')->default(1);
            $table->integer('products_color_id')->unsigned();
            $table->foreign('products_color_id')->references('id')->on('products_color')->onDelete('cascade');
            $table->integer('products_size_id')->unsigned();
            $table->foreign('products_size_id')->references('id')->on('products_size')->onDelete('cascade');
            $table->timestamps();
        });
    }

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
