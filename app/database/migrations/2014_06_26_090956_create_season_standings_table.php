<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeasonStandingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('season_standings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('season_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('games_played');
			$table->integer('points');
			$table->integer('goals_scored');
			$table->integer('goals_scored_on');
			$table->integer('wins');
			$table->integer('loses');
			$table->integer('draws');
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
		Schema::drop('season_standings');
	}

}
