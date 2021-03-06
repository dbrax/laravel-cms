<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Slider extends Model
{

    use HasTranslations;

    public $guarded = [];

    public $translatable = ['title', 'image', 'description'];
}
