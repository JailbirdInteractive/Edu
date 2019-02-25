<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instructors', function (Blueprint $table) {
            //
            $table->decimal('earnings','5','2');
            $table->decimal('gross_earnings','6','2');
            $table->decimal('net_earnings','6','2');
            $table->integer('user_id');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instructors', function (Blueprint $table) {
            //
            $table->dropColumn('earnings');
            $table->dropColumn('gross_earnings');
            $table->dropColumn('net_earinings');
            $table->dropColumn('user_id');
            
        });
    }
}
