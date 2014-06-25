@extends('layouts.main')

@section('content')
   <div class="row">
   		<div class="large-12 large-centered columns">
   			<h1>Players</h1>
   			<table class="players-table">
   				<thead>
   					<th>Name</th>
   					<th>Age</th>
   					<th>Position</th>
   					<th>Overall</th>
   				</thead>
   				<tbody>
   					@foreach($players as $player)
   						<tr>
   							<td>
   								{{ $player->player_name }}
   							</td>
   							<td>
                               	{{ $player->player_position }}
                               </td>
   							<td>
   								{{ $player->player_age }}
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
@stop