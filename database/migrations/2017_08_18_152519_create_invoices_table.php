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
            $table->decimal('discount_amount')->nullable();
            $table->decimal('discount_percent')->nullable();
            $table->integer('user_id');
            $table->integer('term_id');
            $table->integer('invoice_amount_id');
            $table->integer('status_id');
            $table->integer('customer_id');
            $table->timestamps();
        });
        // Schema::create('invoices', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('due');
        //     $table->decimal('shipping')->nullable();
        //     $table->string('add_1_text')->nullable();
        //     $table->decimal('add_1')->nullable();
        //     $table->string('add_2_text')->nullable();
        //     $table->decimal('add_2')->nullable();
        //     $table->decimal('sub_total');
        //     $table->decimal('total');
        //     $table->integer('status_id');
        //     $table->integer('customer_id');
        //     $table->integer('invoice_num');
        //     $table->string('inv_note')->nullable;
        //     $table->timestamps();
        // });
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
