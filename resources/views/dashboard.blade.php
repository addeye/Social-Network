<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/03/2016
 * Time: 7:53
 */
?>
@extends('layouts.master')
@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have  to say?</h3></header>
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="new-post" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>what other peaople say...</h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet neque sit amet rhoncus iaculis. Aenean semper ipsum id gravida tincidunt. Phasellus sit amet facilisis ipsum, a porta eros. In rhoncus, libero in commodo sollicitudin, lorem enim semper ex, eu egestas lacus velit eu nunc. Mauris sed metus enim. Curabitur ac urna ac enim euismod bibendum. Nunc a diam eu elit facilisis sodales non eu ipsum. Nam dictum nisi sit amet maximus volutpat. Nunc aliquet est vel odio suscipit, eu mattis ex tincidunt. Duis tincidunt diam eu risus ultrices laoreet.</p>
                <div class="info">
                    Posted by Max on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet neque sit amet rhoncus iaculis. Aenean semper ipsum id gravida tincidunt. Phasellus sit amet facilisis ipsum, a porta eros. In rhoncus, libero in commodo sollicitudin, lorem enim semper ex, eu egestas lacus velit eu nunc. Mauris sed metus enim. Curabitur ac urna ac enim euismod bibendum. Nunc a diam eu elit facilisis sodales non eu ipsum. Nam dictum nisi sit amet maximus volutpat. Nunc aliquet est vel odio suscipit, eu mattis ex tincidunt. Duis tincidunt diam eu risus ultrices laoreet.</p>
                <div class="info">
                    Posted by Max on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
    @endsection
