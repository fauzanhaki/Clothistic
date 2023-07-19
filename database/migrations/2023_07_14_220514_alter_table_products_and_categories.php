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
        Schema::table('products', function (Blueprint $table) {
            $table->tinyInteger('is_trend')->default(0)->after('name');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->tinyInteger('is_trend')->default(0)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['is_trend']);
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn(['is_trend']);
        });
    }
};
