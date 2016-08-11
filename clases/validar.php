<?php
    class seleccionar{

        public $user;
        public $pass;
        public $mensaje;

        public function login()
        {
            $model= new conexion();
               $conexion=$model->Conectar();
               $sql="SELECT * FROM login WHERE user=:user AND pass=:pass";
               $consulta=$conexion->prepare($sql);
               $consulta->bindParam(":user",  $this->user);
               $consulta->bindParam(":pass",$this->pass);
               $consulta->execute();
               $fila = $consulta->fetch(PDO::FETCH_ASSOC);
               if($fila == 0){
                   $this->mensaje= 'Usuario no registrado';
           }  else {
               session_start();
               $_SESSION["Login"]=TRUE;
               $_SESSION["id"]=$fila["id"];
               $_SESSION["user"]=$fila["user"];
               header("location: panel.php");
               $this->mensaje="Usuario encontrado";
           }
    }
}
 ?>
