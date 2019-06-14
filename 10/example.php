<?php 
$result=preg_match('/web2/','phpwebphpweb');
var_dump($result);

preg_match('/bad/','bestbadbirrdbad',$matches);
print_r($matches);

preg_match('/bc/','abdbc',$matches,PREG_OFFSET_CAPTURE);
var_dump($matches);
 ?>
