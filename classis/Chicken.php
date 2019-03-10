<?php
include_once __DIR__ . '/Animal.php';

/**
 * Class Chicken
 */
class Chicken extends Animal
{
    /**
     * @var array
     * минимум и максимум собираемой продукции
     */
    protected $minMaxProduction = [0,1];

    /**
     * @var string
     * единицы измерения кродукции
     */
    protected  $productName = 'Яиц';
}
