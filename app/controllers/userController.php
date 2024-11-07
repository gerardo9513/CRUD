<?php
    namespace app\controllers;
    use app\models\mainModel;

    class userController extends mainModel{

        #controlador registra usuario#
        public function registrarUsuarioControlador(){

            #Almacen de datos#
            $nombre=$this->limpiarCadena($_POST['usuario_nombre']);
            $apellido=$this->limpiarCadena($_POST['usuario_apellido']);
            $usuario=$this->limpiarCadena($_POST['usuario_usuario']);
            $email=$this->limpiarCadena($_POST['usuario_email']);
            $clave1=$this->limpiarCadena($_POST['usuario_clave1']);
            $clave2=$this->limpiarCadena($_POST['usuario_clave2']);
        }

    } 

