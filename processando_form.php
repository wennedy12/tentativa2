<?php

include 'conectando.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    
    $sql = "INSERT INTO usuarios (nome, email, cpf, telefone, horario, data) VALUES ('$nome', '$email', '$cpf', '$telefone', '$horario', '$data')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "<script>window.location.href = 'listandoconsulta.php';</script>";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
    
    
sleep(2);


header("Location: listandoconsulta.php");
exit();

    
    $conn->close();
}
?>
