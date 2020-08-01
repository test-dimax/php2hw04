<?php

class SomeThing
{

    protected $props = [];

    //магический метод будет выполнен при записи данных в недоступные (защищенные или приватные) или несуществующие свойства.
    //записываем в массив неизвестное св-во
    public function __set($name, $value)
    {
        $this->props[$name] = $value;
    }

    //магический метод будет выполнен при чтении данных из недоступных (защищенных или приватных) или несуществующих свойств.
    //достаём из массива неизвестное св-во
    public function __get($name)
    {
        return $this->props[$name];
    }

    //магический метод будет выполнен при использовании isset() или empty() на недоступных (защищенных или приватных) или несуществующих свойствах.
    public function __isset($name)
    {
        return isset($this->props[$name]);
    }

}

$some = new SomeThing();
$some->foo = 42;

echo $some->foo;