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
        Schema::create('products', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description');
            $table->decimal('main_price', 8, 2)->nullable();
            $table->decimal('main_discount', 8, 2)->nullable();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        //Schema::table('products', function (Blueprint $table) {
          //  $table->dropForeign('category_id');
        //});
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::dropIfExists('products');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
};
