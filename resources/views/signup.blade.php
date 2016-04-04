@extends('layouts.master_minimal')
@section('title')
    Welcome!
@endsection
@section('content')
    <div class="login">
        <h1><a href="#">Social Media </a></h1>
        <div class="login-bottom">
            <h2>Register</h2>
            @include('includes.message-block')
         <form action="{{ route('signup') }}" method="post">
            <div class="col-md-6">
                <div class="login-mail">
                    <input type="text" placeholder="Email" name="email" required="" value="{{Request::old('email')}}">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="First Name" name="first_name" required="" value="{{Request::old('first_name')}}">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" required="" name="password" id="password" value="{{Request::old('password')}}">
                    <i class="fa fa-lock"></i>
                </div>
                <a class="news-letter" href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>I agree with the terms</label>
                </a>

            </div>
            <div class="col-md-6 login-do">
                <label class="hvr-shutter-in-horizontal login-sub">
                    <input type="submit" value="Submit">
                </label>
                <p>Already register</p>
                <a href="{{URL('/')}}" class="hvr-shutter-in-horizontal">Login</a>
            </div>
            <div class="clearfix"> </div>
             <input type="hidden" name="_token" value="{{ Session::token() }}">
             </form>
        </div>
    </div>
    <div class="copy-right">
        <p> &copy; 2016 Social Media. All Rights Reserved | Design by <a href="#">Deye</a> </p></div>


@endsection