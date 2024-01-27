<?php 

namespace App\Services;

class ArrayMenuService implements SomeServiceInterface
{
    public function getMenu():array
    {
      return   [
          'items' => [
              ['href' => route('home'), 'title' => 'Главная'],
          ]
      ];
    }
}