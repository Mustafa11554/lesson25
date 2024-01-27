<?php

namespace App\Services;

Class MenuService implements MenuServiceIntarface
{

  public function getMenu():array
  {
    return   [
        'items' => [
            ['href' => route('qwe'), 'title' => 'Главная'],
        ]
    ];
}
}