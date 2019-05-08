<?php 
    class Wallpaper_Model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }

        public function getHotWallpaper(){
            
            $db = $this->load->database();
            $query = $this->db->query('select * from wallpaper order by Id_img desc limit 8 ');
            $result = $query->result_array();
            return $result;
        }

        public function getAllWallpaper(){
            $db = $this->load->database();
            $query = $this->db->query('select * from wallpaper');
            $result = $query->result_array();
            return $result;
        }

        public function insertWallpaper($titre,$idResolution,$idCategorie,$tags,$image){
            $db = $this->load->database();
            $query = $this->db->query('select Id_img from wallpaper order by Id_img desc limit 1');
            $row = $query->row();
            $lastID = 0;

            if(isset($row)){

                $lastID = $row -> Id_img;
            }

            $insert = "insert into wallpaper values(?,?,?,?,?)";
            $this->db->query($insert,array($lastID,$titre,$idResolution,$idCategorie,$tags,$image));
        }


        public function getImage($id){

            $db = $this->load->database();
            $query = $this->db->query('select * from wallpaper where Id_img = ?', array($id));
            $result = $query->result_array();
            return $result;
        }

        public function getCaracteristique($id){
            $db = $this->load->database();
            $query = $this->db->query('select resolution.Height, resolution.width from resolution join wallpaper on resolution.Id_Resolution = wallpaper.Id_Resolution where wallpaper.Id_img = ?',array($id));
            $result = $query->result_array();
            return $result;
        }

        public function getSimilar($titre){
            
            $db = $this->load->database();
            $querys = $this->db->query('select wallpaper.titre from wallpaper where Id_img = ?',array($titre));
            $resultval = $querys->result_array();

            $sentence  = "";
            if(isset($resultval[0]['Titre']))
            {
                $sentence = str_replace(' ','',$resultval[0]['Titre']);
            }

            $this->db->select('*');
            $this->db->from('wallpaper');
            $this->db->like('Tags', $sentence);
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }

        public function getSameCateg($tags,$id){
            $db = $this->load->database();

            $this->db->select('*');
            $this->db->from('wallpaper');
            $this->db->like('Tags',$tags);
            $this->db->not_like('Id_img',$id);
            $this->db->order_by('rand()');
            $this->db->limit(4);
            $query = $this->db->get();
            $result = $query->result_array();

            $result = $query->result_array();
            return $result;
        }

        public function recherche($search){
            $db = $this->load->database();
            $this->db->select('*');
            $this->db->from('wallpaper');
            $this->db->like('Titre',$search);
            $this->db->or_like('Tags',$search);
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }

        public function getwall(){
            $db = $this->load->database();

            $query = $this->db->query('SELECT wallpaper.Titre, wallpaper.Id_Categorie ,resolution.Width, resolution.Height from wallpaper JOIN resolution on wallpaper  .Id_Resolution = resolution.Id_Resolution');
            $result = $query->result_array();
            return $result;
        }
        
    }

?>