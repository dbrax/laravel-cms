<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'content'];
    public function media()
    {
        return $this->hasMany(PostMedia::class, "postid");
    }
}
