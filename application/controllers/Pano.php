<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pano extends CI_Controller {

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
        $this->load->view('pano/landing');
	}

    public function glenn_project()
    {
        $this->load->helper('url');
        $this->load->view('pano/glennproject');
    }

    public function ayu_project_rev2()
    {
        $this->load->helper('url');
        $this->load->view('pano/ayuproject2');
    }

    public function marco_project()
    {
        $this->load->helper('url');
        $this->load->view('pano/marcoproject');
    }

    public function marco_project_rev1()
    {
        $this->load->helper('url');
        $this->load->view('pano/marcoproject2');
    }

    public function chelsea_project()
    {
        $this->load->helper('url');
        $this->load->view('pano/chelseaproject');
    }

    public function chelsea_project_rev1()
    {
        $this->load->helper('url');
        $this->load->view('pano/chelseaproject2');
    }

    public function chelsea_project_rev2()
    {
        $this->load->helper('url');
        $this->load->view('pano/chelseaproject3');
    }

    public function chelsea_project_rev3()
    {
        $this->load->helper('url');
        $this->load->view('pano/chelseaproject4');
    }

    public function rinny_project()
    {
        $data['rows'][0]['title'] = "RINNY - CINERE - All Rooms";
        $data['rows'][0]['url'] = "http://18.139.219.177/rinnyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "RINNY - CINERE - Master Bedroom";
        $data['rows'][1]['url'] = "http://18.139.219.177/rinnyrtuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "RINNY - CINERE - Kids Bedroom 1";
        $data['rows'][2]['url'] = "http://18.139.219.177/rinnyrtavtour/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function test_eksisting()
    {
        $this->load->helper('url');
        $this->load->view('pano/testeksisting');
    }
}
