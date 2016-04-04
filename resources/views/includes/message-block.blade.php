<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/03/2016
 * Time: 23:03
 */
?>
@if(isset($errors) and count($errors)!=0)
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <ul style="list-style: none">
                @foreach($errors->all() as $error)

                  <li>{{$error}}.</li>

                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            {{Session::get('message')}}
        </div>
    </div>
@endif

