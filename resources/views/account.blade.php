<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 26/03/2016
 * Time: 18:15
 */
?>

@extends('layouts.master_minimal')
@section('title')
    Account
@endsection
@section('content')

    <div>
        <div class="content-main">
            <div class="profile">
                <div class="profile-bottom">
                    <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                    <h3><i class="fa fa-user"></i>Profile</h3>
                    <div class="profile-bottom-top">
                        <div class="col-md-4 profile-bottom-img">
                            <img width="150px" src="@if(Storage::disk('local')->has($user->first_name. '-' .$user->id.'.jpg')) {{ route('account.image',['filename'=>$user->first_name.'-'.$user->id.'.jpg'])}} @endif" alt="">
                        </div>
                        <div class="col-md-8 profile-text">
                            <h6>Jack Dorsey</h6>
                            <table>
                                <tr><td>Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name"></td></tr>
                                <tr>
                                    <td>Email</td>
                                    <td> :</td>
                                    <td><a href="#">{{ $user->email }}</a></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td> :</td>
                                    <td><input type="file" name="image" class="form-control" id="image"></td>
                                </tr>

                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="profile-bottom-bottom">
                        <div class="col-md-4 profile-fo">
                            <h4>23,5k</h4>
                            <p>Followers</p>
                            <a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
                        </div>
                        <div class="col-md-4 profile-fo">
                            <h4>348</h4>
                            <p>Following</p>
                            <a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
                        </div>
                        <div class="col-md-4 profile-fo">
                            <h4>23,5k</h4>
                            <p>Snippets</p>
                            <a href="#"><i class="fa fa-cog"></i>Options</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="profile-btn">
                        <button type="submit" class="btn bg-red">Save changes</button>
                        <div class="clearfix"></div>
                    </div>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
