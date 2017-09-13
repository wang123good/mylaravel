<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','intro','published_at'
    ];

    public function setPublishedAtAtrribute($date){
        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query){
        return $query->where('published_at','<=',Carbon::now());
    }
}
