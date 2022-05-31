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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->length(30);
            $table->string('last_name')->length(30);
            $table->string('phone')->length(8);
            $table->string('email')->unique();
            $table->string('employee_number')->length(10);
            $table->float('salary');
            $table->dateTime('hired_date');
            $table->string('title')->length(20);
            $table->string('address')->length(30);
            $table->string('city')->length(30);
            $table->integer('postal_code')->length(4);
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
        Schema::dropIfExists('employees');
    }
};
