<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Africa/Lagos');

class Demo extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database();

    }

    public function index()
    {

    }

    public function employees_example()
    {
        $crud = new grocery_CRUD();


        $crud->set_table('wallpaper');
        $crud->set_field_upload('Titre','assets\ImageBase');
        $crud->set_field_upload('Image','assets\LittleImg');
        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null)

    {    $this->load->helper('url');

        $this->load->view('admin/admin',$output);
    }
}