<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('top_notes')->nullable();
        $table->string('middle_notes')->nullable();
        $table->string('base_notes')->nullable();
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn(['top_notes', 'middle_notes', 'base_notes']);
    });
}

};
