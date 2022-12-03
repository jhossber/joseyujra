<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'wallet';

    /**
     * Run the migrations.
     * @table wallet
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
        // if (Schema::hasTable($this->set_schema_table)) return;
        // Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // $table->increments('id_wallet');
            $table->increments('id');
            $table->string('name');
            //$table->timestamp('created_at')->nullable()->default(null);
            $table->integer('country');
            $table->string('address');
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
        Schema::dropIfExists('wallet');
    //    Schema::dropIfExists($this->set_schema_table);
     }
}
