<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function user() {
        return $this->belongsTo(User::class, 'category_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
