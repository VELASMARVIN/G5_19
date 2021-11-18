<?php

    class Articulos extends Conectar{

        public  function get_articulos(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM g5_19.ma_articulos ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_articulo($ID){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM g5_19.ma_articulos WHERE ID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_articulos($ID,$DESCRIPCION,$UNIDAD,$COSTO,$PRECIO,$APLICA_ISV,$PORCENTAJE_ISV,$ESTADO,$ID_SOCIO){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO g5_19.ma_articulos(ID,DESCRIPCION,UNIDAD,COSTO,PRECIO,APLICA_ISV,PORCENTAJE_ISV,ESTADO,ID_SOCIO)
            VALUES (?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->bindValue(2, $DESCRIPCION);
            $sql->bindValue(3, $UNIDAD);
            $sql->bindValue(4, $COSTO);
            $sql->bindValue(5, $PRECIO);
            $sql->bindValue(6, $APLICA_ISV);
            $sql->bindValue(7, $PORCENTAJE_ISV);
            $sql->bindValue(8, $ESTADO);
            $sql->bindValue(9, $ID_SOCIO);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }   
        
        public function delete_articulo($ID){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="DELETE FROM g5_19.ma_articulos WHERE  ID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_articulos($ID,$DESCRIPCION,$UNIDAD,$COSTO,$PRECIO,$APLICA_ISV,$PORCENTAJE_ISV,$ESTADO,$ID_SOCIO){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE g5_19.ma_articulos 
            SET DESCRIPCION=?, UNIDAD=?, COSTO=?, PRECIO=?, APLICA_ISV=?, PORCENTAJE_ISV=?, ESTADO=?, ID_SOCIO=? 
            WHERE ID = ?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $DESCRIPCION);
            $sql->bindValue(2, $UNIDAD);
            $sql->bindValue(3, $COSTO);
            $sql->bindValue(4, $PRECIO);
            $sql->bindValue(5, $APLICA_ISV);
            $sql->bindValue(6, $PORCENTAJE_ISV);
            $sql->bindValue(7, $ESTADO);
            $sql->bindValue(8, $ID_SOCIO);
            $sql->bindValue(9, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }


    }  

?>
