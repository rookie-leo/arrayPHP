<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      //Exemplos professor
      $valor_array = array();
      $valor_array[1] = "Uni9";
      $valor_array[0] = 2022;
      $valor_array[] = "Teste";
      $valor_array[] = 10;
     
      print_r($valor_array[0]."<br>");
      echo("Ano - ".$valor_array[1]);
      echo("<br>Valor - ".$valor_array[2]);
      echo("<br>Valor - ".($valor_array[0] + $valor_array[3]));
      echo("<br>");
      print_r($valor_array);

echo("<br>");
echo("<br>");
echo("<br>");      

      $alunos = array();
      $alunos["RA"] = "123456789";
      $alunos["Nome"] = "Leonardo";
      $alunos["Curso"] = "Corte e Custura";
      $alunos["Semestre"] = 6;

      echo $alunos["RA"];
      echo("<br>");
      echo $alunos["Nome"];

echo("<br>");
echo("<br>");
echo("<br>");
                  //Matriz

      $cliente = array();

      //Cliente 1
      $cliente["Nome"][0] = "Leonardo";
      $cliente["CPF"][0] = "012345678";

      //Cliente 2
      $cliente["Nome"][1] = "Jaqueline";
      $cliente["CPF"][1] = "876543210";

      for ($i = 0; $i < count($cliente); $i++) {
         echo("Cliente <b>".$cliente["Nome"][$i]."</b> CPF - <b>".$cliente["CPF"][$i]."</b>"); 
        echo "<br>";
      }

echo("<br>");
echo("<br>");
echo("<br>");

    //ForEach
    $aluno = array("Philip", "Lucas", "Caio", "Davi", "Júlio");

    $random_keys=array_rand($aluno,3);
    echo $aluno[$random_keys[0]]."<br>";
    echo $aluno[$random_keys[1]]."<br>";
    echo $aluno[$random_keys[2]]."<br>";

    foreach($aluno as $n=>$n_value) {
      echo "Aluno (". $n.") ".$n_value."<br>";
    }

echo("<br>");
echo("<br>");
echo("<br>");

      //Meu teste
      $numeros = array(1, 2, 3, 4, 5.5);
      $calc;
      for($i = 0; $i < count($numeros); ++$i) {
          echo $numeros[$i]."<br>";
          $calc += $numeros[$i];
      }

      echo $calc;
    ?> 
  </body>
</html>