<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('due');
            $table->integer('inv_number');
            $table->integer('user_id');
            $table->integer('term_id');
            $table->integer('ship_method_id');
            $table->integer('status_id')->default(1);
            $table->integer('customer_id');
            $table->decimal('subtotal');
            $table->decimal('shipping');
            $table->decimal('total');
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
        Schema::dropIfExists('invoices');
    }
}
