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

    public function fabiola_project()
    {
        $data['rows'][0]['title'] = "FABIOLA - TASIKMALAYA - Pantry & Dining";
        $data['rows'][0]['url'] = "http://18.139.219.177/fabioladiningpantryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project()
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/soegiharto/Soegiharto_Presentation_19.08.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC";
        $data['rows'][1]['url'] = "http://18.139.219.177/soegihartortuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function denny_project()
    {
        $data['rows'][0]['title'] = "DENNY - DESIGN PRESENTATION";
        $data['rows'][0]['url'] = "http://18.139.219.177/dennynava/01_presentation_19082020.pdf";
        $data['rows'][0]['button_title'] = "open PDF document";

        $data['rows'][1]['title'] = "DENNY - TOP TABLE ALTERNATIVE";
        $data['rows'][1]['url'] = "http://18.139.219.177/dennynava/02_top_table.pdf";
        $data['rows'][1]['button_title'] = "open PDF document";

        $data['rows'][2]['title'] = "DENNY - APPLIANCES & SINK ALTERNATIVE";
        $data['rows'][2]['url'] = "http://18.139.219.177/dennynava/03_appliances_sink.pdf";
        $data['rows'][2]['button_title'] = "open PDF document";

        $data['rows'][3]['title'] = "DENNY - OVEN ALTERNATIVE";
        $data['rows'][3]['url'] = "http://18.139.219.177/dennynava/04_oven.pdf";
        $data['rows'][3]['button_title'] = "open PDF document";

        $data['rows'][4]['title'] = "DENNY - WINE DRAWER DETAIL";
        $data['rows'][4]['url'] = "http://18.139.219.177/dennynava/05_wine_drawer_detail.png";
        $data['rows'][4]['button_title'] = "open PNG image";

        $data['rows'][5]['title'] = "DENNY - QUOTATION FURNITURE v4";
        $data['rows'][5]['url'] = "http://18.139.219.177/dennynava/06_quotation_furniture_v4.pdf";
        $data['rows'][5]['button_title'] = "open PDF document";

        $data['rows'][6]['title'] = "DENNY - QUOTATION FURNITURE v5";
        $data['rows'][6]['url'] = "http://18.139.219.177/dennynava/06_quotation_furniture_v5.pdf";
        $data['rows'][6]['button_title'] = "open PDF document";

        $data['rows'][7]['title'] = "DENNY - QUOTATION SIPIL v2";
        $data['rows'][7]['url'] = "http://18.139.219.177/dennynava/07_quotation_sipil.pdf";
        $data['rows'][7]['button_title'] = "open PDF document";

        $data['rows'][8]['title'] = "DENNY - RENDERING v4";
        $data['rows'][8]['url'] = "http://18.139.219.177/dennynava/08_rendering.pdf";
        $data['rows'][8]['button_title'] = "open PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function test_eksisting()
    {
        $this->load->helper('url');
        $this->load->view('pano/testeksisting');
    }
}
