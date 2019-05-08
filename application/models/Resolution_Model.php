<?php 
    class Resolution_Model extends CI_Model{

        public function getAllModel(){
            $db = $this->load->database();
            $query = $this->db->query('select * from resolution');
            $result = $query->result_array();
            return $result;
        }
    }

?>