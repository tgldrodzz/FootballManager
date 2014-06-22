@extends ('layouts.main')

     @section('content')
         <div class="row">
             {{ Form::open(['url' => URL::route('register'), 'id' => 'signUp']) }}
                 @foreach($errors->all() as $error)
                 	<li>{{ $error }}</li>
                 @endforeach
                 @if(Session::has('register_success'))
                     <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('register_success') }}</p>
                 @endif
                 <label for="registerUsername"></label>
                 <input type="text" class="register_username" id="registerUsername" name="username" placeholder="Username">
                 <input type="email" class="" id="" name="email" placeholder="Email Address">
                 <input type="password" class="" id="" name="password" placeholder="">
                 <input type="password" class="" id="" name="confirm_password" placeholder="">

                 <input type="submit" class="" id="" name="register" value="Register">
             {{ Form::close() }}
         </div>
     @stop