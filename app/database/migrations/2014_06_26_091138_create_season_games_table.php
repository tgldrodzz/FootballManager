<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeasonGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('season_games', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('season_id')->unsigned();
			$table->integer('home_team')->unsigned();
			$table->integer('away_team');
			$table->string('score');
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
		Schema::drop('season_games');
	}

}
