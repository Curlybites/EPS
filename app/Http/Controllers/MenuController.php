<?php

namespace App\Http\Controllers;

use App\Service\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $MenuService;

    public function __construct(MenuService $MenuService)
    {
        $this->MenuService = $MenuService;
    }

    public function index()
    {
        $menus = $this->MenuService->index();

        return view('menu.menuIndex', ['title' => 'Menu'], compact('menus'));
    }

    // public function getMenu()
    // {
    //     return $this->MenuService->index();
    // }
}
