<?php

$manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$bw = new \MongoDB\Driver\BulkWrite;

$filter=['nome'=>'Maria'];
//$option=[];
$bw->delete($filter);

$manager->executeWrite('raiz.academicos',$bw);