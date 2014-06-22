@extends('layouts.main')

@section('content')

<div class="row">
    <div class="large-6 columns">
        <pre>
            Username: {{ $user->username }}<br/>
            Email: {{ $user->email }}<br/>
        </pre>
    </div>
</div>

@stop