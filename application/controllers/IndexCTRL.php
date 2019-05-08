<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class IndexCTRL extends CI_Controller
    {
        public function index()
        {
            $this->load->model('Categorie_Model');
            $categories = $this->Categorie_Model->getAllCategorie();
            
            $this->load->model('Wallpaper_Model');
            $hotWallpaper = $this->Wallpaper_Model->getHotWallpaper();

            $this->load->helper('url');
            $this->load->view('template/header');
            $this->load->view('index',array('categorie' => $categories, 'hotWallpaper' => $hotWallpaper));
            $this->load->view('template/footer');
        }

        public function search(){
            $this->load->helper('url');
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            $postData = $this->input->post();
            $this->load->model('Wallpaper_Model');
            $result_search = $this->Wallpaper_Model->recherche($postData['search']);
            $this->load->view('template/header');
            $this->load->view('similar',array('wallpapers' => $result_search));
            $this->load->view('template/footer');
        }
    }

?>