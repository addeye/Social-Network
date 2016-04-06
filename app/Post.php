<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = [
        'jml_like',
        'jml_dislike'
    ];

    public function getJmlLikeAttribute()
    {
        $result = Like::Where('post_id','=',$this->id)->where('like','=',1)->get();
        return $result->count();
    }

    public function getJmlDislikeAttribute()
    {
        $result = Like::Where('post_id','=',$this->id)->where('like','=',0)->get();
        return $result->count();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
