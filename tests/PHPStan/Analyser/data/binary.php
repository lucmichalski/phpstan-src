<?php

/** @var float $float */
$float = doFoo();

/** @var int $integer */
$integer = doFoo();

$string = 'foo';

/** @var string|null $stringOrNull */
$stringOrNull = doFoo();

$arrayOfIntegers = [$integer, $integer + 1, $integer + 2];

$foo = new Foo();

$one = 1;

$array = [1, 2, 3];

reset($array);

die;
