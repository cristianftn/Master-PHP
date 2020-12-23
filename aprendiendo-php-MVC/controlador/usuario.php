<?php

    class UsuarioControlador{

        public function monstrarTodos(){
            require_once 'modelo/usuario.php';

            $usuario = new Usuario();
            $todosLosUsuarios = $usuario -> conseguirTodos();
            require_once 'vista/usuarios/mostrar-todos.php';
        }

        public function crear(){
            require_once 'vista/usuarios/crear.php';
        }
    }
?>