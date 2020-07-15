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

    public function oak_coffeeopenpore()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/oak_coffeeopenpore');
    }

    public function oak_coffeeopenpore_barcode()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/oak_coffeeopenpore_barcode');
    }

    public function walnut_smoke()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/walnut_smoke');
    }

    public function walnut_smoke_barcode()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/walnut_smoke_barcode');
    }

    public function walnut_natural()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/walnut_natural');
    }

    public function walnut_natural_CNC1()
    {
        $this->load->helper('url');
        $this->load->view('library/veneer/walnut_natural_cnc1');
    }
}
