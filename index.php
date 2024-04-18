<?php

require_once 'db.php';

// print on page
var_dump($products);

echo '----------------';
echo '<br>';

// print only a property of the object
echo $products[0]->title;
