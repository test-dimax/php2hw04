<?php


namespace App\View;


trait MagicTrait
{

    //магический метод будет выполнен при записи данных в недоступные (защищенные или приватные) или несуществующие свойства.
    //записываем в массив неизвестное св-во
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    //магический метод будет выполнен при чтении данных из недоступных (защищенных или приватных) или несуществующих свойств.
    //достаём из массива неизвестное св-во
    public function __get($name)
    {
        return $this->data[$name];
    }

    //магический метод будет выполнен при использовании isset() или empty() на недоступных (защищенных или приватных) или несуществующих свойствах.
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

}