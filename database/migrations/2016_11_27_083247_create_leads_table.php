<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('landing_page_id');
            $table->string("name")->nullable();
            $table->string("email")->unique();
            $table->string("phone")->nullable();
            $table->string("transaction_id")->nullable();
            $table->integer("offer_id")->nullable();
            $table->integer("affiliate_id")->nullable();
            $table->string("platform_name")->nullable();
            $table->text("extra_data")->nullable();
            $table->boolean("is_lead")->default(0);
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
        Schema::dropIfExists('leads');
    }
}
