<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $guarded = [];

    public function subMenus()
    {

        return $this->hasMany(SubMenu::class, "menuid");
    }
}
