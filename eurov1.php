<?php

// versao simplificada
function extraiChave($min,$max,$n) {
  // cria array temporário
  $chave = array();

  for($i = 0 ; $i < $n; $i++) {
    // gera aleatorio
    $chave[] = rand($min,$max);
  }

 // nota: nada garante que não haja
 // repetidos

 // TODO : fazer uma versão que verifique
 // se existem repetidos

  return $chave;
}


// extração dos números
$numeros = extraiChave(1,50,5);
// extração das estrelas
$estrelas = extraiChave(1,12,2);

// escreve chave em HTML
$oHTML = fazChaveHTML($numeros,$estrelas);
$oHTML2 = fazChaveHTML2($numeros,$estrelas);


// versão "simples" de fazChaveHTML
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




/*
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


    // versão "simpleXML" de fazChaveHTML
function fazChaveHTML2($osnumeros,$asestrelas) {
  $xhtml = new SimpleXMLElement("<div></div>");
  $xhtml->addAttribute("class","chave");

  $uln = $xhtml->addChild("ul");
  $uln->addAttribute("class","numeros");

  $ule = $xhtml->addChild("ul");
  $ule->addAttribute("class","estrelas");

  foreach ($osnumeros as $numero) {
    $uln->addChild("li",$numero);
  }
  foreach ($asestrelas as $estrela) {
    $ule->addChild("li",$estrela);
  }

  return $xhtml->asXML();
}



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
      echo $oHTML2;
    ?>
	</div>
</body>
</html>
