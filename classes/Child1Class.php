<?php

class Child1Class extends ParentClass
{
    public function print():void
    {
        echo strtoupper($this->text) . PHP_EOL;
    }
}