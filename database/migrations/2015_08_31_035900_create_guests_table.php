<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guest_name',30);
            $table->string('guest_idcard',20);
            $table->string('guest_passport',20);
            $table->string('guest_drivelic',20);
            $table->string('guest_company',30);
            $table->string('guest_phone',30);
            $table->enum('guest_type',['Supplier','Contractor','Third Party','Auditor','Family','NOV Employee','Customer']);
            $table->string('photo',100);
            $table->text('note');
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
        Schema::drop('guests');
    }
}
