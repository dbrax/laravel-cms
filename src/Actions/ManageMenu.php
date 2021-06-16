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

        return $this;
    }

    public  function deleteMenu($menuid)
    {
        $this->menu = Menu::find($menuid);
        $this->menu->delete();

        return $this;
    }


    public  function editMenu(
        $menuid,
        $menu,
        $menuimagepath = "",
        $ispage = 0,
        $pageid = 0
    ) {
        $menu = Menu::find($menuid);
        $menu->menu = $menu;
        $menu->menuimage = $menuimagepath;
        $menu->slug = Str::slug($menu);
        $menu->ispage = $ispage;
        $menu->pageid = $pageid;
        $menu->save();



        return $menu;
    }


    public function addSubMenu()
    {
    }
}
