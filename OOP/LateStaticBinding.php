<?php

class Model
{
    protected static $name = 'Nokia';
    public static function find()
    {
        echo static::$name;
    }
}

class Product extends Model
{
    protected static $name = 'Product';
}

Product::find();

?>