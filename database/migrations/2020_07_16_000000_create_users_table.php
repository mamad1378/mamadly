<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table tbl_user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('fullname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('pro_pic');
            $table->string('account_type');
            $table->boolean('q1')->nullable();
            $table->boolean('q2')->nullable();
            $table->boolean('q3')->nullable();
            $table->boolean('q4')->nullable();
            $table->boolean('q5')->nullable();
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
        Schema::dropIfExists($this->tableName);
    }
}
