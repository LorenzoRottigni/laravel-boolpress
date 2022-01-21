<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'topics',
        'topic_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}
