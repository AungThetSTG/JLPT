<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class Relationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('students', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('moderators', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('exams', function ($table) {
            $table->integer('level_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('exam_room_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('exam_room_id')->references('id')->on('examRooms');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('examRoomMetas', function ($table) {
            $table->integer('exam_room_id')->unsigned();
            $table->foreign('exam_room_id')->references('id')->on('examRooms');
        });

        Schema::table('questions', function ($table) {
            $table->integer('moderator_id')->unsigned();
            $table->integer('question_type_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->foreign('moderator_id')->references('id')->on('moderators');
            $table->foreign('question_type_id')->references('id')->on('questionTypes');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('level_id')->references('id')->on('levels');
        });

        Schema::table('questionMetas', function ($table) {
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
        });

        Schema::table('answers', function ($table) {
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
        });

        Schema::table('userAnswers', function ($table) {
            $table->integer('exam_id')->unsigned();
            $table->integer('exam_room_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->integer('answer_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams');
            $table->foreign('exam_room_id')->references('id')->on('examRooms');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('questionInformations', function ($table) {
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('role_id');
            $table->dropForeign(['role_id']);
        });

        Schema::table('students', function ($table) {
            $table->dropColumn('user_id');
            $table->dropForeign(['user_id']);
        });

        Schema::table('moderators', function ($table) {
            $table->dropColumn('user_id');
            $table->dropForeign(['user_id']);
        });

        Schema::table('exams', function ($table) {
            $table->dropColumn(['level_id', 'student_id', 'exam_room_id', 'category_id']);
            $table->dropForeign(['level_id', 'student_id', 'exam_room_id', 'category_id']);
        });

        Schema::table('examRoomMetas', function ($table) {
            $table->dropColumn(['exam_room_id']);
            $table->dropForeign(['exam_room_id']);
        });

        Schema::table('questions', function ($table) {
            $table->dropColumn(['moderator_id', 'question_type_id', 'category_id', 'level_id']);
            $table->dropForeign(['moderator_id', 'question_type_id', 'category_id', 'level_id']);
        });

        Schema::table('questionMetas', function ($table) {
            $table->dropColumn(['question_id']);
            $table->dropForeign(['question_id']);
        });

        Schema::table('answers', function ($table) {
            $table->dropColumn(['question_id']);
            $table->dropForeign(['question_id']);
        });

        Schema::table('userAnswers', function ($table) {
            $table->dropColumn(['exam_id', 'exam_room_id', 'question_id', 'answer_id', 'category_id']);
            $table->dropForeign(['exam_id', 'exam_room_id', 'question_id', 'answer_id', 'category_id']);
        });

        Schema::table('questionInformations', function ($table) {
            $table->dropColumn(['question_id']);
            $table->dropForeign(['question_id']);
        });
    }
}
