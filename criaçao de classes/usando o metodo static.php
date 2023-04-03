<?php
class Login
{
    public static $usuario;

    public static function usuario_autenticado()
{
        echo"usuario autenticado com sucesso";
}
}
Login::usuario_autenticado();

?>