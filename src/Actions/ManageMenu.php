<?php

namespace Epmnzava\LaravelCms\Actions;

use Epmnzava\LaravelCms\Models\Menu;
use Illuminate\Support\Str;

class ManageMenu
{


    public $menu;
    public function __construct()
    {
    }




    public function createMenu($menu, $menuimagepath = "", $ispage = 0, $pageid = 0)
    {

        $this->menu = Menu::create([
            "menu" => $menu,
            "menuimage" => $menuimagepath,
            "slug" => Str::slug($menu),
            "ispage" => $ispage,
            "pageid" => $pageid


        ]);
    }
}
