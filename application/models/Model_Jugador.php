<?php

/**
 * Modelo de nuestra tienda el cual interactuara con la base de datos
 * tienda_online , sera el encargado de todas las operaciones con ella.
 */
class model_Jugador extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     *
     * @return array de categorias, devuelve toda las categorias existentes
     */
    public function NewJugador($datos) {
        try {
            $this->db->insert('jugador', $datos);
            return $this->db->insert_id();
        } catch (Exception $ex) {
            return false;
        }
    }

    public function GetJugador($id) {
        $query = $this->db->query("SELECT j.id as id,j.nombre as nombre,j.tecnica as tecnica,j.fisica as fisica, p.descripcion as puntuacion,c.descripcion as categoria FROM jugador j ,categoria c ,puntuacion p WHERE c.id = p.categoria and j.puntuacion = p.id and  j.id = '" . $id . "' and usuario = " . $_SESSION['usuario'] . " ; ");
        return $query->row();
    }

    public function GetJugadores() {
        $query = $this->db->query("SELECT j.nombre as nombre, p.descripcion as puntuacion, j.tecnica as tecnica,j.fisica as fisica ,c.descripcion as categoria FROM jugador j ,categoria c ,puntuacion p WHERE c.id = p.categoria and j.puntuacion = p.id  and usuario = " . $_SESSION['usuario'] . " ORDER BY j.nombre ;");
        return $query->result_array();
    }

    public function GetJugadoresNombre() {
        $query = $this->db->query("SELECT id,nombre FROM jugador Where usuario = " . $_SESSION['usuario'] . ";");
        return $query->result_array();
    }

    public function JugadorExiste($nombre) {
        $query = $this->db->query("SELECT COUNT(*) as total FROM jugador WHERE nombre = '" . $nombre . "'  and usuario = " . $_SESSION['usuario'] . " ;");
        return $query->row();
    }

    /**
     * 
     * @return Array de datos formateados para la etiqueta form_dropdown
     * ejemplo :
     * <?php echo form_label('Nombre: &nbsp;  '), form_dropdown('Id', $array); ?>
     */
    public function ComboJugadores() {
        // armamos la consulta
        $query = $this->db->query("SELECT j.nombre as nombre, j.id as id  FROM jugador j  WHERE usuario = " . $_SESSION['usuario'] . " ORDER BY j.nombre ;");

        // si hay resultados
        if ($query->num_rows() > 0) {
            // almacenamos en una matriz bidimensional
            $arrDatos[htmlspecialchars("-1", ENT_QUOTES)] = htmlspecialchars("Seleccione jugador", ENT_QUOTES);
            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->nombre, ENT_QUOTES);

            $query->free_result();
            return $arrDatos;
        }
    }

    function ActualizarJugador($id, $data) {
        try {
            $this->db->where('id', $id);
            $this->db->update('jugador', $data);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

//    public function AppsCombo() 
//    {
//        $query = $this->db->query('SELECT Id,Nombre FROM App ORDER BY Nombre');
//        return $query->result_array();
//    }
//
}
