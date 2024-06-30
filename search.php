<?php
require 'conexao.php';

$q = isset($_GET['q']) ? $_GET['q'] : '';


$sql = "SELECT nome, cpf FROM cad_cliente WHERE nome LIKE ? OR cpf LIKE ?";
$stmt = $link->prepare($sql);
//$searchTerm = '%' . $q . '%';
$searchTerm = $q . '%';
$stmt->bind_param('ss', $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$results = array();
while ($row = $result->fetch_assoc()) {
  $results[] = $row;
}

echo json_encode($results);
?>
