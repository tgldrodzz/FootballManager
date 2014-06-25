@extends('layouts.main')

@section('content')

	<div id="profileWrapper">

		@include('layouts.sidebar')

		<div id="bodyContent">
			<div id="memberProfileInfo">
				<div class="row">
					<div id="logo">
						<div class="large-2 columns">
							<img src="http://placehold.it/170x170">
						</div>
					</div>
					<div id="memberStats">
						<div class="large-10 columns">
							<div class="row">
								<div class="large-6 columns">
									<ul class="list-user-profile-info">
										<li><strong>Username: </strong>{{ $user->username }}</li>
										<li><strong>Team Name: </strong>{{ $user->team->team_name }}</li>
										<li><strong>Stadium: </strong>{{ $arena->arena_name }}</li>
									</ul>
								</div>
								<div class="large-6 columns">
									<ul  class="list-user-profile-info">
										<li><strong>Total Wins: </strong>{{ $user->team->team_wins }}</li>
										<li><strong>Total Loses: </strong>{{ $user->team->team_loses }}</li>
										<li><strong>Member Since: </strong>{{ $user->created_at }}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>

@stop