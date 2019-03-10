<?php
/**
 * контроллер
 */
include_once __DIR__ . '/classis/Animal.php';
include_once __DIR__ . '/classis/Cote.php';
include_once __DIR__ . '/classis/Chicken.php';
include_once __DIR__ . '/classis/Cow.php';

error_reporting(E_ALL & ~E_NOTICE);

$countCiken = 20; // определение количества куриц
$countCow = 10; // определение количества коров

$coto = new Cote(); // инициализация хлева

$n = $countCiken; // добавлять куриц в хлев
for( $i=0 ;$i<$n;$i++){
    $coto->addAnimal(new Chicken());
}

$n = $countCow; // добавлять коров в хлев
for( $i=0 ;$i<$n;$i++){
    $coto->addAnimal(new Cow());
}

$coto->productCollection(); // Собирать продукцию у всех животных, зарегистрированных в хлеву;
$coto->showProductions(); // отображение

$rating =  $coto->getRating('Cow',3,3);

echo PHP_EOL . '3 коровы которые дали больше всего молока ' . $rating[0] .  PHP_EOL . '3 коровы которые дали меньше всего молока ' . $rating[1];