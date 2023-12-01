<?php
include ("sistema.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $peso = $_POST["peso"];
  $altura = $_POST["altura"];

  $imc = $peso /pow ($altura,2);
 
  
  echo "<h2 style= 'font-size:20px; text-align: center; position:absolute;top:410px;
  left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Seu IMC é: " . $imc . "</h2>";


  if ($imc < 18.5){
    echo "<div style= ' text-align: center;position:absolute;top:480px;left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>
    <p style='bottom: 4;'>Você está abaixo do peso.</p>
  </div>";

  } elseif ($imc < 25) {
    echo "<p style=' text-align: center;position:absolute;top:480px;
    left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Você está com o peso normal.</p>";
  } elseif ($imc < 30) {
    echo "<p style= 'text-align: center;position:absolute;top:480px;left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Você está com sobrepeso.</p>";
  } elseif ($imc < 35) {
    echo "<p style= ' text-align: center;position:absolute;top:480px;left:440px;;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Você está com obesidade grau I.</p>";
  } elseif ($imc < 40) {
    echo "<p style= ' text-align: center;position:absolute;top:480px;left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Você está com obesidade grau II.</p>";
  } else {
    echo "<p style=' text-align: center;position:absolute;top:480px;left:440px;width:20%; padding: 10px ; outline: 0;border: 1px solid rgba(105, 105, 105, 0.397);border-radius: 10px;'>Você está com obesidade grau III.</p>";
  }

}

?>