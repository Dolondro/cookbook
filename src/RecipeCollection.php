<?php

namespace Dolondro\Cooking;

class RecipeCollection implements \IteratorAggregate
{
    protected $recipes = [];

    public function __construct()
    {
        $recipes = glob(__DIR__."/../recipes/*");
        foreach ($recipes as $recipe) {
            $this->recipes[] = new Recipe(json_decode(file_get_contents($recipe), true));
        }
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->recipes);
    }

    public function getList()
    {
        return $this->recipes;
    }
}
