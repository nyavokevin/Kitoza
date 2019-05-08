<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

    class CategorieCTRL extends CI_Controller
    {
        public function loadCategorie(){
            $id = $this->input->get('Id_Categorie');
            $this->load->model('Categorie_Model');
            $result = $this->Categorie_Model->getWallPaperByCategorie($id);

            $this->load->helper('url');
            $this->load->view('template/header');
            $this->load->view('Categorie', array('wallpapers' => $result));
            $this->load->view('template/footer');
        }
    }

?>