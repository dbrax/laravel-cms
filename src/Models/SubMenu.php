<?php

namespace Epmnzava\LaravelCms\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model{

    public $guarded=[];

    public function Menu(){

        return $this->belongsTo(Menu::class,"menuid");
    }



}