<?php

function buscaUsuario ($conexao, $email, $senha)
{
	$pass = md5($senha);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$pass}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}
