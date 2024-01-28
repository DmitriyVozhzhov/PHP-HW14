<?php

declare(strict_types=1);

require_once './classes/ParentClass.php';
require_once './classes/Child1Class.php';
require_once './classes/Child2Class.php';

$parentClass = new ParentClass();
$parentClass->print();

$child1Class = new Child1Class();
$child1Class->print();

$child2Class = new Child2Class();
$child2Class->print();