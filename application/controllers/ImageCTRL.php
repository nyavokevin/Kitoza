<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

    class ImageCTRL extends CI_Controller
    {
        public function loadImage(){
            $id = $this->input->get('Id_img');
            $this->load->model('Wallpaper_Model');
            $result = $this->Categorie_Model->getWallPaperByCategorie($id);
            $this->load->helper('url');
            $this->load->view('template/header');
            $this->load->view('Categorie', array('wallpapers' => $result));
            $this->load->view('template/footer');
        }

        public function loadSingleImage(){
            $id = $this->input->get('Id_img');
            $this->load->model('Wallpaper_Model');
            $result = $this->Wallpaper_Model->getImage($id);
            
            $imageCaract = $this->Wallpaper_Model->getCaracteristique($id);
            $same = $this->Wallpaper_Model->getSameCateg($result[0]['Tags'],$result[0]['Id_img']);

            $this->load->helper('url');
            $this->load->view('template/header');
            $this->load->view('image-page', array('wallpaper' => $result,'resolution' => $imageCaract,'same' => $same));
            $this->load->view('template/footer');
        }

        public function loadSimilar(){
            $titre = $this->input->get('titre');
            $this->load->model('Wallpaper_Model');
            $wallpapers = $this->Wallpaper_Model->getSimilar($titre);
            
            $this->load->helper('url');
            $this->load->view('template/header');
            $this->load->view('similar',array('wallpapers'=>$wallpapers));
            $this->load->view('template/footer');
        }

        public function loadAdmin(){

            $this->load->helper('url');
            
            $this->load->view('login');
              
        }

        
    }

?>