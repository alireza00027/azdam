<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStoresTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('paid')->unsigned();
            $table->enum('status', ['paying', 'pending', 'paid'])->default('paying');
            $table->tinyInteger('is_active')->default(0)->comment('0=>inactive 1=>active');
            $table->integer('product_count');
            $table->string('doc_image')->nullable();
            $table->string('addredss')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_stores');
    }
}
