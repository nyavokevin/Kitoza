<?php 
    class Categorie_Model extends CI_Model{

        public function __construct()
        {
                
                parent::__construct();
        }

        public function getAllCategorie(){

            $db = $this->load->database();
            $query = $this->db->query('select * from categorie');
            $result = $query->result_array();
            return $result;
        }

        public function getWallPaperByCategorie($id){
            $db = $this->load->database();
            $query = $this->db->query('select wallpaper.* from categorie join wallpaper on categorie.Id_categorie = wallpaper.Id_Categorie where categorie.Id_Categorie = ?', array($id));
            $result = $query->result_array();
            return $result;
        }

        public function getCategorie($id){
            $db = $this->load->database();
            $query = $this->db->query('select * from categorie where Id_Categorie = ?',array($id));
        }

        public function addResolution($height,$width){
            $db = $this->load->database();
            $query = $this->db->query('select Id_Resolution from resolution order by Id_Resolution desc limit 1');
            $row = $query->row();
            $lastID = 0;

            if(isset($row)){

                $lastID = $row -> Id_Resolution + 1;
            }

            $insert = "insert into resolution values(?,?,?)";
            $this->db->query($insert,array($lastID,$height,$width));
        }

        public function addCategorie($name){
            $db = $this->load->database();
            $query = $this->db->query('select Id_Categorie from categorie order by Id_Categorie desc limit 1');
            $row = $query->row();
            $lastID = 0;

            if(isset($row)){

                $lastID = $row -> Id_Categorie + 1;
            }

            $insert = "insert into categorie values(?,?)";
            $this->db->query($insert,array($lastID,$name));
        }

         

    }

?>