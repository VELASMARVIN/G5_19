<?php

   class Socios extends Conectar{

       public function get_socios(){
           $conectar=parent::Conexion();
           $sql="SELECT * FROM g5_19.ma_socios_negocio ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

       public function get_socio($ID){
           $conectar=parent::Conexion();
           parent::set_names();
            $sql="SELECT * FROM g5_19.ma_socios_negocio WHERE ID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

       public function insert_socios($ID,$NOMBRE,$RAZONSOCIAL,$DIRECCION,$TIPOSOCIO,$CONTACTO,$EMAIL,$FECHACREADO,$ESTADO,$TELEFONO){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO g5_19.ma_socios_negocio(ID,NOMBRE,RAZON_SOCIAL,DIRECCION,TIPO_SOCIO,CONTACTO,EMAIL,FECHA_CREADO,ESTADO,TELEFONO)
        VALUES (?,?,?,?,?,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $ID);
        $sql->bindValue(2, $NOMBRE);
        $sql->bindValue(3, $RAZONSOCIAL);
        $sql->bindValue(4, $DIRECCION);
        $sql->bindValue(5, $TIPOSOCIO);
        $sql->bindValue(6, $CONTACTO);
        $sql->bindValue(7, $EMAIL);
        $sql->bindValue(8, $FECHACREADO);
        $sql->bindValue(9, $ESTADO);
        $sql->bindValue(10, $TELEFONO);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

       public  function delete_socios($ID){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="DELETE FROM g5_19.ma_socios_negocio  WHERE  ID = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $ID);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }



       public function update_socios($ID,$NOMBRE,$RAZONSOCIAL,$DIRECCION,$TIPOSOCIO,$CONTACTO,$EMAIL,$FECHACREADO,$ESTADO,$TELEFONO){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="UPDATE g5_19.ma_socios_negocio SET NOMBRE =?,RAZON_SOCIAL =?,DIRECCION =?,TIPO_SOCIO =?,CONTACTO =?,EMAIL =?,FECHA_CREADO =?,ESTADO =?,TELEFONO =?
        WHERE ID =?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $NOMBRE);
        $sql->bindValue(2, $RAZONSOCIAL);
        $sql->bindValue(3, $DIRECCION);
        $sql->bindValue(4, $TIPOSOCIO);
        $sql->bindValue(5, $CONTACTO);
        $sql->bindValue(6, $EMAIL);
        $sql->bindValue(7, $FECHACREADO);
        $sql->bindValue(8, $ESTADO);
        $sql->bindValue(9, $TELEFONO);
        $sql->bindValue(10, $ID);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

     




    }

?>