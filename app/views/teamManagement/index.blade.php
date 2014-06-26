@extends('layouts.main')
    <div id="teamManagement">
	    @section('sidebar')
	        @include('layouts.managementSidebar')
	    @stop
        @section('content')
            <div id="teamManagementInfo">
                <div class="row">
                   <div class="large-12 large-centered columns">
                   	   <h1>Players</h1>
                   		<table class="players-table">
                   			<thead>
                   				<th>Name</th>
                   				<th>Age</th>
                   				<th>Position</th>
                   			    <th>Fitness</th>
                   				<th>Overall</th>
                   			</thead>
                   			<tbody>
                   				@foreach($players as $player)
                   					<tr>
                   						<td>
                   							{{ $player->player_name }}
                   						</td>
                   						<td>
                                            {{ $player->player_age }}
                                        </td>
                   						<td>
                   							{{ $player->player_position }}
                   						</td>
                   						<td>
                                            {{ $player->player_fitness }}
                                        </td>
                   						<td>
                   							{{ $player->player_overall }}
                   						</td>
                   					</tr>
                   				@endforeach
                   			</tbody>
                   	    </table>
                   </div>
                </div>
            </div>
        @stop
	</div>
