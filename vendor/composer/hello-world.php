<?php
namespace HelloWorld;

class Sayhello
{
    public static function world()
    {
        return 'Hello World, Composer';
    }
}
echo Sayhello::world();