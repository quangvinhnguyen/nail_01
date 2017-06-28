<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameComboProductsTableAndComboEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('combo_products', 'combo_product');
        Schema::rename('combo_events', 'combo_event');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('combo_product', 'combo_products');
        Schema::rename('combo_event', 'combo_events');
    }
}
