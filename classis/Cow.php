<?php
include_once __DIR__ . '/Animal.php';

/**
 * Class Cow
 */
class Cow extends Animal
{
    /**
     * @var array
     * минимум и максимум собираемой продукции
     */
    protected $minMaxProduction = [8, 12];
    /**
     * @var string
     * единицы измерения кродукции
     */
    protected $productName = 'Литров молока';
}
