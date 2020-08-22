<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'excerpt', 'body'];

    public function path(){
        return route('articles.show',$this);
    }

    ///Just commenting a change in hopes that I can get windows to actually update bloody github online

    public function user(){
        return $this->belongsTo(User::class)->withDefault([
            'name'=>'Guest Author',
        ]);
    }
}
