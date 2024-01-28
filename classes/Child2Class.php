<?php

class Child2Class extends ParentClass
{
    public function print():void
    {
        echo ucwords($this->text) . PHP_EOL;
    }
}