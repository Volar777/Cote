<?php

/**
 * Class Animal
 * Базовый класс животных
 */

class Animal
{
    /**
     * @var int
     * id каждого животного
     */
    protected $id;

    /**
     * @var int
     *  количество продукции собранное, собранное сегодня
     */
    protected $countProduction = 0;

    /**
     * @var string
     * единицы измерения кродукции
     */
    protected $productName = '';

    /**
     * @var array
     * минимум и максимум собираемой продукции
     */
    protected $minMaxProduction = [];

    /**
     * функция собирать продукцию у данного животного
     */
    public function countProductionToday(){
        $this->countProduction = rand($this->minMaxProduction[0],$this->minMaxProduction[1]);
    }

    /**
     * @param $id
     * функция устанавливает id животного
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * @return int
     * функция возвращает id животного
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string
     * функция фозвращает название единицы измерения продукции
     */
    public function getProductionName(){
        return $this->productName;
    }

    /**
     * @return int
     * функция возвращает количество собранной продукции у данного животного
     */
    public function getCountProduction(){
        return $this->countProduction;
    }
}
