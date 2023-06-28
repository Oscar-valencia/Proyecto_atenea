<?php

    include("conexion.php");

    if(isset($_POST['send'])){

        if (

            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['telefono']) >= 1 


        ) {

            $nombre=trim($_POST['nombre']);
            $email=trim($_POST['email']);
            $telefono=trim($_POST['telefono']);
            $consulta = " INSERT INTO datos(nombre,email,telefono)
                         VALUES ('$nombre' ,'$email','$telefono')";

                         $resultado = mysqli_query($conexion,$consulta);

                         if ($consulta) {
                            ?>
                            <h3 class="succes">pronto nos comunicaremos con tigo</h3>
                            <?php
                         }else{
                            ?>
                                <h3 class="error">Disculpa Ocurrio un error</h3>
                            <?php
                         }
        }




    }

?>