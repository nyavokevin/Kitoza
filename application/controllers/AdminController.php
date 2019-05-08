<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

    class AdminController extends CI_Controller
    {
        function __construct()
{
    parent::__construct();
}

        public function loadAdmin(){

            $this->load->helper('url');
            $this->load->model('AdminModel');
            $this->load->model('Wallpaper_Model');
            
            $postData = $this->input->post();
            
            $bool = $this->AdminModel->login($postData['name'],$postData['pass']);
            
            $wallpapers = $this->Wallpaper_Model->getwall();      
            if($bool > 0){
                $this->load->view('template/headerTemplate');
                $this->load->view('admin/admin', array('wallpapers' => $wallpapers));
            }else{
                $this->load->view('login');
            }
        }

        public function getWallp(){
            $this->load->helper('url');
            $this->load->model('AdminModel');
            $this->load->model('Wallpaper_Model');
            $wallpapers = $this->Wallpaper_Model->getwall();
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/admin', array('wallpapers' => $wallpapers));
        }

        public function getCateg(){
            $this->load->helper('url');
            $this->load->model('Categorie_Model');
            $categs = $this->Categorie_Model->getAllCategorie();
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/categorie', array('categories' => $categs));
        }

        public function getResolution(){
            $this->load->helper('url');
            $this->load->model('Resolution_Model');
            $resolution = $this->Resolution_Model->getAllModel();
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/resolution', array('resolution' => $resolution));
        }

        public function loadInsertW(){
            $this->load->helper('url');
            $this->load->model('Resolution_Model');
            $resolution = $this->Resolution_Model->getAllModel();
            $this->load->model('Categorie_Model');
            $categs = $this->Categorie_Model->getAllCategorie();
            
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/wallpaperInsert',array('resolution'=>$resolution, 'categs' => $categs));
        }
        public function insertForm(){
            $this->load->helper('url');
            
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            $postData = $this->input->post();
            $titre = $postDate['Titre'];
            $id_categorie = $postData['Id_Categorie'];
            $id_resolution = $postData['Id_Resolution'];
            $tags = $postData['tags'];
            

            $this->load->library('upload'); 
            $config['upload_path'] = './assets/ImageBase/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $configs['upload_path'] = './assets/LittleImg/';
            $configs['allowed_types'] = 'gif|jpg|png';
            $configs['max_size'] = '2048';
            $configs['max_width'] = '2000';
            $configs['max_height'] = '2000';

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('upload')  ){
                $error = array('error' => $this->upload->display_errors());
                 echo $this->upload->display_errors();
            }
            else{
                $data = array('upload_data' => $this->upload->data());
                echo "<p>File sucesfully uploaded</p>";
            }

            $this->load->library('upload',$configs);
            $this->upload->initialize($configs);

            if ( ! $this->upload->do_upload('littleImg')  ){
                $error = array('error' => $this->upload->display_errors());
                 echo $this->upload->display_errors();
            }
            else{
                $data = array('upload_data' => $this->upload->data());
                echo "<p>File sucesfully uploaded</p>";
                $img =  $_FILES['upload']['name'];
                $this->load->model('Wallpaper_model');
                $this->Wallpaper_Model->insertWallpaper($titre,$id_resolution,$id_categorie,$tags,$img);
            }
        }

        public function loadInsertC(){
            $this->load->helper('url');
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/categorieInsert');
        }

        public function insertCategorie(){
            $this->load->helper('url');
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            $postData = $this->input->post();
            $this->load->model('Categorie_Model');
            $this->Categorie_Model->addCategorie($postData['categorie']);
            echo "<p>Insert sucesfully </p>";
        }

        public function loadInsertR(){
            $this->load->helper('url');
            $this->load->view('template/headerTemplate');
            $this->load->view('admin/resolutionInsert');
        }

        public function insertResolution(){
            $this->load->helper('url');
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            $postData = $this->input->post();
            $this->load->model('Categorie_Model');
            $this->Categorie_Model->addResolution($postData['width'],$postData['height']);
            echo "<p>Insert sucesfully </p>";
        }
    }
?>