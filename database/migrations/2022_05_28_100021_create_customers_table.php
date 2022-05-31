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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->length(30);
            $table->string('last_name')->length(30);
            $table->dateTime('birth_date');
            $table->integer('phone')->length(8);
            $table->string('email')->unique();
            $table->string('address')->length(40);
            $table->string('city')->length(40);
            $table->integer('postal_code')->length(4);
            $table->bigInteger('credit_card_number');
            $table->bigInteger('driver_license_number');
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
