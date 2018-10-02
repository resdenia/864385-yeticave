<?php
$array_category= array('Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное');
$array_products = array(
  array('2014 Rossignol District Snowboard', 'Доски и лыжи', 10999, 'img/lot-1.jpg'),
  array('DC Ply Mens 2016/2017 Snowboard', 'Доски и лыжи', 159999, 'img/lot-2.jpg'),
  array('Крепления Union Contact Pro 2015 года размер L/XL', 'Крепления',	8000, 'img/lot-3.jpg'),
  array('Ботинки для сноуборда DC Mutiny Charocal', 'Ботинки',	10999,	'img/lot-4.jpg'),
  array('Куртка для сноуборда DC Mutiny Charocal', 'Одежда', 7500, 'img/lot-5.jpg'),
  array('Маска Oakley Canopy', 'Разное', 5400, 'img/lot-6.jpg')
);

require('functions.php');

$header = include_template('header.php', ['title'=> 'Главная']);
print($header);


$main_layout = include_template('main.php', ['array_category' => $array_category, 'array_products' => $array_products ]);
print($main_layout);


$footer = include_template('footer.php',  ['array_category' => $array_category]);
print($footer);
	
?>