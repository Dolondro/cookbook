<?php
namespace Dolondro\Cooking;

class Recipe
{
    protected $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function get()
    {
        return $this->data;
    }
}