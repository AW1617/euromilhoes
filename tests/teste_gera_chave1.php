<?php
set_time_limit ( 100 );

function geraChave1($min,$max,$n) {

  $chave = array();

  while (count($chave) < $n) {
    $extracted = rand($min,$max);
    if (!in_array($extracted,$chave)) {
      array_push($chave,$extracted);
    }
  }
  return $chave;
}



function geraChave2($min,$max,$n) {

  $tombola = array();
  $chave = array();

  for ($num = $min; $num <= $max; $num++) {
    $tombola[] = $num;
  }

  for ($i = 0; $i < $n; $i++) {
    $idx = rand(0,count($tombola)-1);
    $extraido = array_splice($tombola,$idx,1);
    $chave[] = $extraido[0];
  }

  return $chave;
}



function geraChave3($min,$max,$n) {

  $tombola = array();
  $chave = array();

  for ($num = $min; $num <= $max; $num++) {
    $tombola[] = $num;
  }

  $total = $max - $min + 1;

  for ($i = 0; $i < $n; $i++) {
    $idx = rand($i,$total-1);
    $chave[] = $tombola[$idx];
    $tombola[$idx] = $tombola[$i];
  }

  return $chave;
}


// timings

const NVEZES = 10000;
const MIN = 1;
const MAX = 500;
const N = 200;

$chave = array();

$tempoi1 = microtime(TRUE);
for($i=0; $i<NVEZES;$i++) {
  $chave = geraChave1(MIN,MAX,N);
}
$tempof1 = microtime(TRUE);
$tempot1 = $tempof1 - $tempoi1;



$tempoi2 = microtime(TRUE);
for($i=0; $i<NVEZES;$i++) {
  $chave = geraChave2(MIN,MAX,N);
}
$tempof2 = microtime(TRUE);
$tempot2 = $tempof2 - $tempoi2;




$tempoi3 = microtime(TRUE);
for($i=0; $i<NVEZES;$i++) {
  $chave=geraChave3(MIN,MAX,N);
  //var_dump($chave);
}
$tempof3 = microtime(TRUE);
$tempot3 = $tempof3 - $tempoi3;

echo ("<br/>");
echo ('Processo1: '.$tempot1);
echo ("<br/>");
echo ('Processo2: '.$tempot2);
echo ("<br/>");
echo ('Processo3: '.$tempot3);




?>
