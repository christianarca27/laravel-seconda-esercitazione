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
        Schema::table('wines', function (Blueprint $table) {
            $table->unsignedBigInteger('cantina_id')->nullable()->after('id');

            $table->foreign('cantina_id')->references('id')->on('wineries')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wines', function (Blueprint $table) {
            $table->dropForeign('wines_cantina_id_foreign');

            $table->dropColumn('cantina_id');
        });
    }
};
