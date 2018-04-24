<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    
   protected $table = 'article';
    
   protected $fillable = [
        'title', 'content'
    ];
    
   protected $dates = ['deleted_at'];
    
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }
}