<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $guarded=[];




    public function path(){
        return route('article.show', $this);
    }
    
    public function author(){
        return $this->belongsTo(User::class,'user_id'); 
         //select * form user where article_id= 1
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

            
}
