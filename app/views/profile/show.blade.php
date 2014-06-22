@extends('layouts.main')

@section('content')

<div class="row">
    <div class="large-6 columns">
        <pre>
            Username: {{ $user->username }}<br/>
            Email: {{ $user->email }}<br/>
            Team Name: {{ $user->team->team_name }}<br/>
            Arena Name: {{ $arena->arena_name }}
        </pre>
    </div>
</div>

@stop