<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string(column: 'amount');
            $table->string('total_amount');
            $table->timestamps();
        });
    }
    /**->constrained() столбец product_id ссылается на столбец id в таблице products.  
     * название столбца преполагает в мнж числе
     * ->onDelete('cascade')
     * если что-то удалено из главной таблице - удалиться и из этой, мэ
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
