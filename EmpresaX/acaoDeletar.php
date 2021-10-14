<?php

require("./funcoesEmpresa.php");

$idFuncionario = $_GET["id"];

deletarFuncionario("./empresaX.json", $idFuncionario);

header("location: empresaXindex.php");