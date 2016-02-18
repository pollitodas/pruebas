<?php
    // PROCESO LOGIN
    
    // CONECTAR AL SERVIDOR DE BASE DE DATOS
    include "conex.inc";
    
    // CAPTURAR DATOS DEL FORMULARIO LOGIN
    $usuario = $_POST["USR"];
    $clave = $_POST["PWD"];
    $password =  $clave;//md5($clave);

    // usar la siguiente línea en sustitución de la anterior
    // si la clave está encriptada con MD5
    
    
    // CREAR SENTENCIA SQL PARA BUSCAR USUARIO
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password = '$password'";

    // EJECUTAR SENTENCIA SQL
    $result = mysqli_query($conex,$sql);
    
    // VERIFICAR EXISTENCIA DEL USUARIO
    $rows = mysqli_num_rows($result);
    if ($rows==0){ 
        // CERRAR CONEXION
        $sql = "SELECT * FROM users WHERE username = '$usuario' AND password = '' ";
        $result = mysqli_query($conex,$sql);
        $rows = mysqli_num_rows($result);
        if($rows == 0){
            mysqli_close($conex);
            //session_destroy();
            //header("Location: pages/errorPage.php?msg=Usuario y contraseña incorrectos");
            echo "string";
            echo "string";
        }else{
            $sql = "UPDATE users SET password = '$password' WHERE username = '$usuario' ";

            $result2 = mysqli_query($conex,$sql);
            // CREAR SESSION
            session_start();
            $_SESSION["USER"] = $usuario;
            $_SESSION["name"]= $Nombreusuario;
    
            $registro = mysqli_fetch_assoc($result);
            $_SESSION["NOMBREUSUARIO"]= $registro["nombre"];
            $_SESSION["TIPOUSUARIO"]= $registro["tipoUSR"];        
            
            // CERRAR CONEXION
            mysqli_close($conex);
            echo "string2";
            // IR A BIENVENIDA DEL USUARIO        
            header("Location: pages/inicio.php");
        }
        
    } else {
        // CREAR SESSION
        session_start();
        $_SESSION["USER"] = $usuario;
        $_SESSION["name"]= $Nombreusuario;

        $registro = mysqli_fetch_assoc($result);
        $_SESSION["NOMBREUSUARIO"]= $registro["nombre"];
        $_SESSION["TIPOUSUARIO"]= $registro["tipoUSR"];        
        
        // CERRAR CONEXION
        mysqli_close($conex);
        echo "string3";
        // IR A BIENVENIDA DEL USUARIO        
        header("Location: pages/inicio.php");
    } // endif        
?>