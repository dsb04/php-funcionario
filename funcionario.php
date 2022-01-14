<?php
function findId($funcionarios,$id){
    foreach ($funcionarios as $f) {
        if ($f['id'] == $id) {
            return $f;
        };
    };

    return null;
};

$funcionarios = [
    ['id' => 33, 'nome' => 'joao', 'salario'=> 1000],
    ['id' => 66, 'nome' => 'maria', 'salario'=> 1100],
    ['id' => 99, 'nome' => 'bernabe', 'salario'=> 1500]
];

$id = $_POST['id'];
$func = findId($funcionarios, $id);
if (is_null($func)) {
    echo 'Funcionario não ecncontrado';
    die();
}
echo $func['nome'] . ", R$ " . number_format($func['salario'], 2);


?>