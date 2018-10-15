<?php

for ($i=0; $i <= 1000 ; $i+=10) {

	if ($i >= 100 && $i <= 200) continue;

	if($i === 300) break;

	echo "$i <br/>";
}

?>