<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/03/2016
 * Time: 7:53
 */
?>
@extends('layouts.master_minimal')
@section('content')
    <div class="content-main">
    <div class="col-md-6 col-md-offset-3">
        <form action="{{ route('post.create') }}" method="post">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        <div class="post">
            <div class="text-area">
                <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
            </div>
            <div class="post-at">
                <div class="text-sub">
                    <input type="submit" value="post">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        </form>
    </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="content-bottom">
                <h3>What do you have  to say?</h3>
            </div>
            <div class="content-box">
                <table class="table">
                    <tbody>
                    @foreach($posts as $post)
                    <tr class="table-row" data-postId="{{ $post->id }}">
                        <td class="table-img">
                            <img width="50" src="{{ route('account.image',['filename'=>$post->user->first_name.'-'.$post->user->id.'.jpg'])}}" alt="" />
                        </td>
                        <td class="table-text">
                            <p style="font-size: 14px; color: black">{{$post->body}}</p>
                            <p>Posted by {{$post->user->first_name}} on {{$post->created_at}}</p>
                            <div class="interaction">
                            <a href="#" class="like">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1 ? 'You like this post' : 'Like': 'Like' }}</a> |
                            <a href="#" class="like">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike': 'Dislike' }}</a>
                            @if(Auth::user() == $post->user)
                            |
                            <a href="#" class="edit">Edit</a> |
                            <a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>
                            @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--@include('includes.message-block')--}}
    {{--<section class="row new-post">--}}
        {{--<div class="col-md-6 col-md-offset-3">--}}
            {{--<header><h3>What do you have  to say?</h3></header>--}}
            {{--<form action="{{ route('post.create') }}" method="post">--}}
                {{--<div class="form-group">--}}
                    {{--<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Create Post</button>--}}
                {{--<input type="hidden" name="_token" value="{{ Session::token() }}">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="row posts">--}}
        {{--<div class="col-md-6 col-md-offset-3">--}}
            {{--<header><h3>what other peaople say...</h3></header>--}}
            {{--@foreach($posts as $post)--}}
            {{--<article class="post"  data-postId="{{ $post->id }}">--}}
                {{--<p>{{$post->body}}</p>--}}
                {{--<div class="info">--}}
                    {{--Posted by {{$post->user->first_name}} on {{$post->created_at}}--}}
                {{--</div>--}}
                {{--<div class="interaction">--}}
                    {{--<a href="#" class="like">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1 ? 'You like this post' : 'Like': 'Like' }}</a> |--}}
                    {{--<a href="#" class="like">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike': 'Dislike' }}</a>--}}
                    {{--@if(Auth::user() == $post->user)--}}
                    {{--|--}}
                    {{--<a href="#" class="edit">Edit</a> |--}}
                    {{--<a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</article>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</section>--}}

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
        var urlLike = '{{ route('like') }}';
    </script>
    @endsection
