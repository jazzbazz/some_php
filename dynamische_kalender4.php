<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>dynamische kalender</title>
<!-- stylesheet -->
<!--<link rel="stylesheet" type="text/css" href="css/styles.css"/> -->
<!-- scripts -->
<!-- <script src="js/code.js"></script> -->
</head>
<body>
<H1> Dynamische kalender </h1>
<?php
//variabelen aanmaken
$weekdag = date("N"); //maandag=01 zondag 07
$maand = date("m"); //maanden als numeriek getal 01 - 12
$dag = date("d"); //waarde tussen 01 en 31
$jaar = date("Y"); // jaar in vier cijfers
$ndagen = date("t"); //totaal aantal dagen in de maand
$maanden = array(1 => "januari","februari","maart","april","mei","juni","juli", "augustus",
  "september", "oktober", "november", "december"); //array maanden index = varmaand
$dezeMaand = $maanden[$maand];

echo '<h2>Een kalender voor de maand '.$maanden[$maand].'</h2>';

//positie begindatum bepalen
$posbegindatum = date("N",mktime(0,0,0,$maand,1,$jaar));
echo $posbegindatum ;

echo '<br>';

echo '<table>
        <tr>
          <td>Ma</td>
          <td>Di</td>
          <td>Wo</td>
          <td>Do</td>
          <td>Vr</td>
          <td>Za</td>
          <td>Zo</td>
          </tr>';

for ($i=1;$i < $posbegindatum;$i++){
    echo '<td></td>';
    }



for ($j=1;$j<=$ndagen;$j++){

    if ($j == $dag){
    echo '<td style = "background-color:yellow;">'.$j.'</td>';}
    else {echo'<td>'.$j.'</td>';}

    if (date("N",mktime(0,0,0,$maand,$j,$jaar))== 7){
      echo '</tr>';
    }
}
echo '</table>';
?>
</body>
</html>
