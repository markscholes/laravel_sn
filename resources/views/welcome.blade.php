@extends('layouts/master')

@section('title')
Sign In
@endsection

@section('content')
  @if(count($errors) > 0)
  <div class="row">
    <div class="col-md-6">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <h4>Register</h4>
      <form action="{{ route('signup') }}" method="post">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ Request::old('email') }}" /> <!-- This is to make sure that if one of the fields is incorrect and the form reloads the user is not required to enter all data again-->
        </div>
        <div class="form-group form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" id="first_name" class="form-control" value="{{ Request::old('first_name') }}" />
        </div>
        <div class="form-group form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" id="last_name" class="form-control" value="{{ Request::old('last_name') }}" />
        </div>
        <div class="form-group form-group {{ $errors->has('password') ? 'has-error' : '' }}">
          <label for="password">Password:</label>
          <input type="password" name="password" id ="password" class="form-control" />
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>

        </div>
        {!! csrf_field() !!}
      </form>
    </div>
    <div class="col-md-6">
      <h4>Log In</h4>
      <form action="{{ route('signin') }}" method="post">
        <div class="form-group form-group form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ Request::old('email') }}"  />
        </div>
        <div class="form-group form-group form-group {{ $errors->has('password') ? 'has-error' : '' }}">
          <label for="password">Password:</label>
          <input type="password" name="password" id ="password" class="form-control" />
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
        </div>
          {!! csrf_field() !!}
      </form>
    </div>
  </div>
@endsection
