<?php

namespace App\Service\Menu;

use App\Models\Menu;

class MenuService
{

    public function index()
    {
        $menus = Menu::all()->toArray();

        return $menus;
    }
}
