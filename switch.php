<?php

$perfil = "admin";

switch ($perfil) {
    case "admin":
        echo "Acesso total";
        break;
    case "editor":
        echo "Pode editar conteudo";
        break;
    default:
    echo "Acesso visitante"
}