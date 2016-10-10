# EuroMilhões (versão 1)

## Objetivo

Codificar um ficheiro `eurov1.php` que gere automaticamente uma chave do euromilhões.

## Passo 1

Codifique o ficheiro `eurov1.php`de forma completamente estática, isto é sem recurso a programação PHP.
Exemplo:

```html
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="title">
		Euromilhões
	</div>
	<div id="content">
		<div class="chave">
			<ul class="numeros">
				<li> 2 </li>
				<li> 3 </li>
				<li> 5 </li>
				<li> 33 </li>
				<li> 44 </li>
			</ul>
			<ul class="estrelas">
				<li>3</li>
				<li>5</li>
			</ul>			
		</div>
	</div>
</body>
</html>
```
### nota
Mais tarde, inclua código CSS por forma a melhorar a apresentação da página

## Passo 2

Codifique uma função que faça uma extração de `n` números aleatórios entre `min`e `max` e os devolva num `array`.

```php
<?php
// interface
// array function extraiChave($min,$max,$n)

function extraiChave($min,$max,$n) {
	// TODO
}
?>
```

### nota
numa primeira versão poderá apenas gerar 5 numeros aleatórios usando a função `rand()`. Depois implemente um algoritmo que evite a existência de números repetidos. E finalmente ordene os números extraídos.


## Passo 3

Codifique agora uma função `fazChaveHTML` que dados dois arrays com os **numeros** e as **estrelas** gere uma **string** com o código HTML correspondente à chave a ser apresentada

```php
<?php
// interface
// string function fazChaveHTML($numeros,$estrelas)

function fazChaveHTML($numeros,$estrelas) {
	// TODO
}
?>
```
O resultado esperado desta função será um HTML semelhante ao usado na definição da versão estática da página. Ou seja:

```php
<?php
$html = fazChaveHTML([2,3,5,33,44],[3,5]);

/*
a variável HTML dever conter o texto:
<div class="chave">
	<ul class="numeros">
		<li> 2 </li>
		<li> 3 </li>
		<li> 5 </li>
		<li> 33 </li>
		<li> 44 </li>
	</ul>
	<ul class="estrelas">
		<li>3</li>
		<li>5</li>
	</ul>			
</div>
*/
 ?>
```

## Passo 4
Finalize o exercício integrando o código PHP codificado, permitindo a geração de chaves.
