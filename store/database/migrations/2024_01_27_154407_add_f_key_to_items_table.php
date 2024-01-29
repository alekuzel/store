<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFKeyToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            // Add a foreign key constraint
            $table->foreign('consignment_id')->references('id')->on('consignments');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['consignment_id']);
        });
    }
}
