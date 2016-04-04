@extends('layouts.master_minimal')
@section('title')
    Welcome!
    @endsection
@section('content')
<div class="login">
    <h1><a href="#">Social Media </a></h1>

    <div class="login-bottom">
        <h2>Login</h2>
        @include('includes.message-block')
        <form action="{{ route('signin') }}" method="post">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="col-md-6">
                <div class="login-mail">
                    <input type="text" placeholder="Email" name="email" value="{{Request::old('email')}}">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" name="password" value="{{Request::old('password')}}">
                    <i class="fa fa-lock"></i>
                </div>
                <a class="news-letter " href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
                </a>
            </div>
            <div class="col-md-6 login-do">
                <label class="hvr-shutter-in-horizontal login-sub">
                    <input type="submit" value="login">
                </label>
                <p>Do not have an account?</p>
                <a href="{{URL('/signup')}}" class="hvr-shutter-in-horizontal">Signup</a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
<!---->
<div class="copy-right">
    <p> &copy; 2016 Social Media. All Rights Reserved | Design by <a href="#">Deye</a> </p></div>



    {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
            {{--<h2>Sign Up</h2>--}}
            {{--<form action="{{ route('signup') }}" method="post">--}}
                {{--<div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">--}}
                    {{--<label for="email">Your E-Mail</label>--}}
                    {{--<input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">--}}
                {{--</div>--}}
                {{--<div class="form-group {{ $errors->has('first_name') ? 'has-error':'' }}">--}}
                    {{--<label for="first_name">Your First Name</label>--}}
                    {{--<input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">--}}
                {{--</div>--}}
                {{--<div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">--}}
                    {{--<label for="password">Your Password</label>--}}
                    {{--<input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                {{--<input type="hidden" name="_token" value="{{ Session::token() }}">--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
            {{--<h2>Sign In</h2>--}}
            {{--<form action="{{ route('signin') }}" method="post">--}}
                {{--<div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">--}}
                    {{--<label for="email">Your E-Mail</label>--}}
                    {{--<input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">--}}
                {{--</div>--}}
                {{--<div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">--}}
                    {{--<label for="password">Your Password</label>--}}
                    {{--<input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                {{--<input type="hidden" name="_token" value="{{ Session::token() }}">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    @endsection