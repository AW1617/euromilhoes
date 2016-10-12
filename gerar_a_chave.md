# Gerar uma chave aleatória

## Extração sem Repetições

### Processo 1

* Repetir até o que array `$chave` contenha `n` elementos.

 * gerar um número `$extraido` aleatoreamente.

 * Verificar se `$extraido` já existe no array `$chave`.  Se sim : não inserir, senão : inserir.

 nota: usar a função `in_array($chave,$extraido)` para verificar se um número `$extraido` existe na `$chave`

```php
<?php

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

 ?>
 ```
### Processo 2

Processo análogo à extração real.

* Preencher um array com todos os números a extrair (tômbola).
* Fazer n vezes:
  * gerar uma posição aleatória da tômbola entre 0 e tamanho-1
  * retirar o elemento do array
  * inserir elemento na chave



  ```php
  <?php
  function geraChave2($min,$max,$n) {

    $tombola = array();
    $chave = array();

    for ($num = $min; $num <= $max; $num++) {
      $tombola[] = $num;
    }

    for ($i = 1; $i < $n; $i++) {
      $idx = rand(0,count($tombola)-1);
      $extraido = array_splice($tombola,$idx,1);
      $chave[] = $extraido[0];
    }

    return $chave;
  }
   ?>
   ```
## Tempo de Execução

Como curiosidade ficam aqui alguns timings

gerar 100000 chaves (5 numeros de 50) demora
* processo1 : 1.84 s
* processo2 : 5.45 s

gerar 100000 chaves (25 numeros de 50) demora
* processo1 : 11.98 s
* processo2 : 12.93 s

gerar 100000 chaves (45 numeros de 50) demora
* processo1 : 21.94 s
* processo2 : 38.11 s

nota: foi usada a função `microtime(TRUE)` para obter os tempos de início e fim da execução dos ciclos de geração de chaves.
