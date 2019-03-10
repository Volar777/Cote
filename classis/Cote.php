<?php

/**
 * Class Cote
 * класс хлев
 */
class Cote
{
    /**
     * @var array
     * массив объектов животных
     */
    protected $animals = [];

    /**
     * @var int
     * счетчик id животных
     */
    protected $maxId = 0;

    /**
     * @var array
     * содержит массив видов животных с количеством продукции и елиницами измерения
     */
    protected $products = [];

    /**
     * @param Animal $animal
     * функция добавления животного в хлев
     */
    public function addAnimal(Animal $animal){
        $this->animals[] = $animal;
        $animal->setId($this->maxId++);
    }

    /**
     * функция собирает продукцию у всех животных, зарегистрированных в хлеву
     */
    public function productCollection(){
        foreach ($this->animals as $animal){
           $animal->countProductionToday();
        }
    }

    /**
     * функция собирает продукцию у всех животных, зарегистрированных в хлеву
     */
    public function countProducts(){
        foreach ($this->animals as $animal){
            $this->products[get_class($animal)]['count'] += $animal->getCountProduction();
            $this->products[get_class($animal)]['productName'] = $animal->getProductionName();
        }
    }

    /**
     * Выводит на экран общее кол-во собранной продукции и единици измерения
     */
    public function showProductions(){
        foreach ($this->products as $item)
        {
            echo $item['productName'] . ' ' . $item['count'] . PHP_EOL;
        }
    }

    /**
     * @param string $nameClassAnimal
     * вид животного
     * @param int $maxCount
     * количество животгых с максимальным количеством продукции
     * @param int $minCount
     * количество животгых с минимальным количеством продукции
     * @return array
     * функция выводит рейтинг животных с максимальным и минимальным количеством продукции
     */
    public function getRating(string $nameClassAnimal, int $maxCount, int $minCount){
        $rating = [];
        foreach ($this->animals as $animal){
            if($nameClassAnimal === get_class($animal)){ // получаем объекты нужных животных
                $rating[$animal->getId()] = $animal->getCountProduction(); // формируем массив [id => количество продукции]
            }
        }
        arsort($rating);
        $idAnimals = array_keys($rating);
        $max = array_slice($idAnimals, 0, $maxCount);
        $min = array_slice($idAnimals, -($minCount),$minCount);

        $max = implode(',',$max);
        $min = implode(',',$min);
return [$max,$min];
    }

}
