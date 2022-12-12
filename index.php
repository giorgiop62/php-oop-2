<?php
 require_once __DIR__ .'/models/product.php';
 require_once __DIR__ .'/models/Food.php';
 require __DIR__ . '/models/Category.php';
 require __DIR__ . '/models/Accessory.php';


 $royalcanin = new Food(new Category('cane'), 34, 'cd45hiu', 'royalcanin', 'dicembre', 44);

 var_dump($royalcanin);

 $guinzaglio = new Accessory(new Category('cane'),15,'de45v','gIX','','2kg' );

 var_dump($guinzaglio);





