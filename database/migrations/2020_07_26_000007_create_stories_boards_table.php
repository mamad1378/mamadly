<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorysBoardsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'storys_boards';

    /**
     * Run the migrations.
     * @table storys_boards
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('story_id')->index();
            $table->unsignedBigInteger('board_id')->index();

            
            $table->foreign('board_id')
            ->references('id')->on('boards')
            ->onDelete('no action')
            ->onUpdate('no action');
            
            $table->foreign('story_id')
                ->references('id')->on('stories')
                ->onDelete('no action')
                ->onUpdate('no action');
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
