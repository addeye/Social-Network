@extends('layouts.master')
@section('title')
    Welcome!
    @endsection
@section('content')
    @if(isset($errors))
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
          </ul>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error':'' }}">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h2>Sign In</h2>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    @endsection