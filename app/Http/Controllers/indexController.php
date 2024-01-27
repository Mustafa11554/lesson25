<?php

namespace App\Http\Controllers;

use App\Services\SomeServiceInterface;


class IndexController extends Controller
{
    private SomeServiceInterface $menuService;
    public function __construct(SomeServiceInterface $menuService)
    {
        $this->menuService = $menuService;
    }
    public function main()
    {
         $abc = route('home');
         $items = config('menu.items'); 
        
        return view('index.main', ['menu'=> $this->menuService->getMenu()]);
    }
}