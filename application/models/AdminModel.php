<?php
    class AdminModel extends CI_Model{

        public function __construct(){
            parent::__construct();
        }

        public function login($name,$pass){
            $db = $this->load->database();
            $query =$this->db->query('select * from admin where name = ? and password = ?',array($name,$pass));
            $val = true;
            
            if($query->num_rows()> 0){
                $val = true;
            }else{
                $val = false;
            }
            
            return $val;
        }
    }
?>