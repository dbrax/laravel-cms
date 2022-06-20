<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageButton extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['label'];
}
