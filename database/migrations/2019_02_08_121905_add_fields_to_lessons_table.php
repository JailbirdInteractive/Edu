<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            //
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('lesson_url');
            $table->integer('course_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            //
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('category');
            $table->dropColumn('lesson_url');

            $table->dropColumn('course_id');

        });
    }
}
