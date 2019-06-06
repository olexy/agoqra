<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id'); //user making transactions
            $table->integer('qrcode_owner_id')->nullable();
            $table->integer('qrcode_id');
            $table->integer('payment_method')->nullable(); //paypal, stripe, paystack etc.
            $table->longText('message')->nullable();
            $table->float('amount', 8, 2);
            $table->string('company_name')->default('initiated'); //initiated, completed & paymet failed, completed
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
