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
    Schema::create('walk_in_payments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pass_id')->constrained('flexible_access')->onDelete('cascade');
        $table->string('customer_name')->nullable();
        $table->string('mobile_no')->nullable();
        $table->decimal('amount', 10, 2);
        $table->enum('method', ['cash', 'gcash', 'card']);
        $table->timestamp('payment_date')->useCurrent();
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
        Schema::dropIfExists('walk_in_payments');
    }
};
