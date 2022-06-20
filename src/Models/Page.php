<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{

  use HasTranslations;

  protected $guarded = [];

  public $translatable = ['title', 'description', 'tagline', 'caption', 'content', 'slug'];

  public function media()
  {

    return $this->hasMany(PageMedia::class, 'pageid');
  }

  public function buttons()
  {

    return $this->hasMany(PageButton::class, 'pageid');
  }

  public function pagetype()
  {

    return $this->belongsTo(PageType::class, 'pagetype');
  }
}
