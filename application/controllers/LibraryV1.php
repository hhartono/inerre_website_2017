<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryV1 extends CI_Controller {

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
        $this->load->view('library/landing');
	}

    /*
    *
    * DUCO SECTION
    *
    */
    public function duco_black_matte()
    {
        $data['title'] = "Black - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_black_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_softgray2_matte()
    {
        $data['title'] = "Soft Gray No 2 - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_tundragray2_matte()
    {
        $data['title'] = "Tundra Gray No 2 - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    /*
    *
    * HPL SECTION
    *
    */
    public function lamitak_taglio_marcello_walnut()
    {
        $data['title'] = "Taglio Marcello Walnut";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_taglio_marcello_walnut.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_tito_ercolano()
    {
        $data['title'] = "Tito Ercolano";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_tito_ercolano.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    /*
     *
     * VENEER SECTION
     *
     */
    public function oak_coffeeopenpore()
    {
        $data['title'] = "Oak - Coffee Open Pore";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_coffeeopenpore_barcode()
    {
        $data['title'] = "Oak - Coffee Open Pore - Barcode";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_barcode.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_smoke()
    {
        $data['title'] = "Walnut - Smoke";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_smoke_barcode()
    {
        $data['title'] = "Walnut - Smoke - Barcode";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_barcode.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_natural()
    {
        $data['title'] = "Walnut - Natural";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_natural_CNC1()
    {
        $data['title'] = "Walnut - Natural - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_cnc1.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }
}