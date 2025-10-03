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
    Schema::create('analytics', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->integer('total_members')->default(0);
        $table->integer('total_passes')->default(0);
        $table->decimal('total_sales', 10, 2)->default(0);
        $table->string('age_group')->nullable();
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
        Schema::dropIfExists('analytics');
    }
};
