<?php

namespace App\Http\Controllers;

use App\Services\MenuServiceIntarface;
use illuminate\Http\Request;


class IndexController extends Controller
{
    private MenuServiceIntarface $menuService;
    public function __construct(MenuServiceIntarface $menuService)
    {
        $this->menuService = $menuService;
    }
    public function main()
    {
        $abc = route('qwe');
        $items = config('menu.items'); 
               return view('index.main', ['menu'=> $this->meniService->getMenu()]);
    }
}