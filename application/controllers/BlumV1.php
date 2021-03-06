<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlumV1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->helper('url');
        $this->load->view('blum/landing');
	}

    /*
    public function test()
    {
        $this->load->helper('url');
        $this->load->view('blum/test');
    }
    */

    public function bottle_set()
    {
        $this->load->helper('url');
        $this->load->view('blum/bottleset');
    }

    public function pan_storage()
    {
        $this->load->helper('url');
        $this->load->view('blum/panstorage');
    }

    public function cutlery_storage()
    {
        $this->load->helper('url');
        $this->load->view('blum/cutlerystorage');
    }

    public function utensil_storage()
    {
        $this->load->helper('url');
        $this->load->view('blum/utensilstorage');
    }

    public function food_storage()
    {
        $this->load->helper('url');
        $this->load->view('blum/foodstorage');
    }

    public function sink_unit()
    {
        $this->load->helper('url');
        $this->load->view('blum/sinkunit');
    }

    public function spice_holder()
    {
        $this->load->helper('url');
        $this->load->view('blum/spiceholder');
    }
}
