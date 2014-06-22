@extends ('layouts.main')

@section('content')
    <div class="row">
        {{ Form::open(['url' => URL::route('login'), 'id' => 'signUp']) }}
            @foreach($errors->all() as $error)
            	<li>{{ $error }}</li>
            @endforeach
            @if(Session::has('login_form_error'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('login_form_error') }}</p>
            @endif

            <input type="text" class="username" id="Username" name="username" placeholder="Username">
            <input type="password" class="" id="" name="password" placeholder="Password">

            <input type="submit" class="button" id="" name="login" value="Login">
        {{ Form::close() }}
    </div>
@stop