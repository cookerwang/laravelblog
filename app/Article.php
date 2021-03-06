<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	protected $fillable = [
        'title',
        'intro',
        'content',
        'published_at',
        'user_id',
        ];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::createFromFormat( 'Y-m-d', $date);
    }

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function user() {
        $this->belongsTo('App\User'); // $article->user(); 获取文章的user
    }
}
