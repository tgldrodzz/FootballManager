@extends('layouts.main')
    <div id="standing">
	    @section('sidebar')
	        @include('layouts.managementSidebar')
	    @stop
        @section('content')
            <div id="standingInfo">
                <div class="row">
                   <div class="large-12 large-centered columns">
                   	   <h1>Standing</h1>
                   		<table class="standing-table">
                   			<thead>
                   			    <th>Pos</th>
                   				<th>Team</th>
                   				<th>Games Played</th>
                   				<th>Games Won</th>
                   			    <th>Games Lost</th>
                   				<th>Games Tied</th>
                   				<th>Goals</th>
                   				<th>Goals Against</th>
                   				<th>Goal +/-</th>
                   				<th>Points</th>

                   			</thead>
                   			<tbody>
                   			    <?php $i = 1 ?>
                   				@foreach($standings as $standing)
                   					<tr>
                   					    <td>
                   					        {{ $i; $i++ }}
                   					    </td>
                   						<td>
                   							{{ $standing->user->username }}
                   						</td>
                   						<td>
                                            {{ $standing->games_played  }}
                                        </td>
                   						<td>
                   							{{ $standing->wins  }}
                   						</td>
                   						<td>
                                            {{ $standing->loses  }}
                                        </td>
                   						<td>
                   							{{ $standing->draws  }}
                   						</td>
                   						<td>
                                            {{ $standing->goals_scored  }}
                                        </td>
                                        <td>
                                            {{ $standing->goals_scored_on  }}
                                         </td>
                                         <td>
                                            {{ $standing->goals_scored -  $standing->goals_scored_on}}
                                         </td>
                                         <td>
                                            {{ $standing->points }}
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
