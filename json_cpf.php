<?php
 header("Cache-Control: no-cache, must-revalidate");
  header('Content-type: application/json');
require("conexao.php");
$cam = isset($_GET['Cpf'])? $_GET['Cpf']:null;
$busca = json_encode (array(
         "erro" => true
));
if ($result = mysqli_query($link, "SELECT * FROM cad_cliente WHERE cpf LIKE '%$cam%' ")){
       while($row = $result->fetch_array()){
    $busca = json_encode (array(
	    "nome" => utf8_encode ($row['nome']),
        "fone" =>  utf8_encode ($row['fone']),
        "cidade" => ($row['cidade']),
        "uf" => utf8_encode ($row['uf']),
		"rua" => utf8_encode ($row['rua']),
		"cpf" => utf8_encode ($row['cpf']),
		"cep" => utf8_encode ($row['cep']),
		
		
		
    )
	);
			   
}

};
// Creating a dynamic JSON file
//$file = "api_mysql.json";
  
// Converting data into JSON and putting
// into the file
// Checking for its creation
//if(file_put_contents($file, 
        //json_encode($busca, JSON_PRETTY_PRINT)))
mysqli_close($link);

//--------------------------------
// ler arquivo json
//$lista= file_get_contents("api_mysql.json");
//$data = json_decode($lista, true);
//echo $data['nome'].'<br>';
//echo $data['fone'].'<br>';
//echo $data['moto'].'<br>';
//echo $data['placa'].'<br>';
 
  
  echo 'cpf_callback('.$busca.');';
  
?>
