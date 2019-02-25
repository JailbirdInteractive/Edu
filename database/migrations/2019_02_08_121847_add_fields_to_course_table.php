<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->integer('duration');
            $table->integer('instructor_id');
            $table->string('course_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('category');
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('duration');
            $table->dropColumn('instructor_id');
            $table->dropColumn('course_type');

        });
    }
}
