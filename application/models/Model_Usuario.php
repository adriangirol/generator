<?php

/**
 * Modelo de nuestra tienda el cual interactuara con la base de datos
 * tienda_online , sera el encargado de todas las operaciones con ella.
 */
class model_Usuario extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     *
     * @return array de categorias, devuelve toda las categorias existentes
     */
    public function Correcto($user, $pass) {
        $query = $this->db->query("SELECT COUNT(*) as total FROM usuario WHERE user = '" . $user . "' AND pass ='" . $pass . "' ; ");
        if ($query->row()->total > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function CodigoUser($user) {
        $query = $this->db->query("SELECT id as id FROM usuario WHERE user = '" . $user . "'; ");
        return $query->row()->id ;
         
    }
//    public function NewJugador($datos) {
//        try 
//        {
//            $this->db->insert('jugador', $datos);
//            return $this->db->insert_id();
//        } catch (Exception $ex) 
//        {
//            return false;
//        }
//        
//    }
//    
//     public function GetJugador($id)
//    {
//        $query = $this->db->query("SELECT j.nombre as nombre, p.descripcion as puntuacion,c.descripcion as categoria FROM jugador j ,categoria c ,puntuacion p WHERE c.id = p.categoria and j.puntuacion = p.id and  j.id = '".$id."' ; ");
//        return $query->row();
//    }
//    
//    public function GetJugadores()
//    {
//        $query = $this->db->query("SELECT j.nombre as nombre, p.descripcion as puntuacion,c.descripcion as categoria FROM jugador j ,categoria c ,puntuacion p WHERE c.id = p.categoria and j.puntuacion = p.id ORDER BY j.nombre ;");
//        return $query->result_array();
//    }
//    
//    public function GetJugadoresNombre()
//    {
//        $query = $this->db->query("SELECT id,nombre FROM jugador ;");
//        return $query->result_array();
//    }
//    
//    public function JugadorExiste($nombre)
//    {
//        $query = $this->db->query("SELECT COUNT(*) as total FROM jugador WHERE nombre = '".$nombre."' ;");
//        return $query->row();
//    }
//    
    /**
     * 
     * @return Array de datos formateados para la etiqueta form_dropdown
     * ejemplo :
     * <?php echo form_label('Nombre: &nbsp;  '), form_dropdown('Id', $array); ?>
     */
//    public function AppsCombo() 
//    {
//      // armamos la consulta
//      $query = $this->db->query('SELECT Id,Nombre FROM Apps ORDER BY Nombre');
//
//      // si hay resultados
//      if ($query->num_rows() > 0) {
//          // almacenamos en una matriz bidimensional
//          foreach ($query->result() as $row)
//              $arrDatos[htmlspecialchars($row->Id, ENT_QUOTES)] = htmlspecialchars($row->Nombre, ENT_QUOTES);
//
//          $query->free_result();
//          return $arrDatos;
//      }
//    }
//    public function AppsCombo() 
//    {
//        $query = $this->db->query('SELECT Id,Nombre FROM App ORDER BY Nombre');
//        return $query->result_array();
//    }
//

    

}
