<?php

function generateRandomName($arrayGiven) {
  $rand_value = array_rand($arrayGiven, 1);
  return $arrayGiven[$rand_value[0]];
}

?>
