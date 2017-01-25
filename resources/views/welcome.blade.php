@extends('layouts/master')

@section('title')
Sign In
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h4>Register</h4>
      <form action="{{ route('signup') }}" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" id="first_name" class="form-control" />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" id="last_name" class="form-control" />
        </div>
        <div class="form-group">
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
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
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
