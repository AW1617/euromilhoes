<?php

// versao simplificada
function extraiChave($min,$max,$n) {
  $chave = array();

  for($i = 0 ; $i < $n; $i++) {
    $chave[] = rand($min,$max);
  }

  return $chave;
}



$numeros = extraiChave(1,50,5);
$estrelas = extraiChave(1,12,2);

// versão "simples"
function fazChaveHTML($osnumeros,$asestrelas) {
  $html = "<div class=\"chave\">";

  $html .= '<ul class="numeros">';

  foreach ($osnumeros as $numero) {
    $html .= '<li>' . $numero . '</li>';
  }
  // ciclo para os lis dos numeros

  $html .= '</ul>';
  $html .= '<ul class="estrelas">';

  // ciclo para os lis dos estrelas
  foreach ($asestrelas as $estrela) {
    $html .= '<li>' . $estrela . '</li>';
  }

  $html .= '</ul>';
  $html .= '</div>';

  return $html;
}

$oHTML = fazChaveHTML($numeros,$estrelas);




var_dump($estrelas);

?>
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

    <?php
      echo $oHTML;
    ?>
	</div>
</body>
</html>
