<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homemodel extends CI_Model
{

    public function getAll()
    {

        $this->load->database();
        $sql = "SELECT * FROM bus_info";
        $result = $this->db->query($sql);
        return $result->result_array();


    }

}