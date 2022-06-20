<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageType extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name', 'slug'];
}
