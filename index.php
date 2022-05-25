<?php

include_once __DIR__ . '/vendor/autoload.php'; 

use Batsirai\Crawler\Classes\News;

$newsDom = new News('https://washingtonpost.com');
$headlines = $newsDom->get_headlines(); 

include("Templates/newsList.php");  