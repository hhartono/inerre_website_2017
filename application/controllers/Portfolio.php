<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
        $this->load->view('portfolio/landing');
	}

    public function portfolio1()
    {
        $this->load->helper('url');
        $this->load->view('portfolio/portfolio1');
    }

    public function portfolio2()
    {
        $this->load->helper('url');
        $this->load->view('portfolio/portfolio2');
    }

    public function portfolio3()
    {
        $data['client'] = 'AJ RESIDENCE';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'ALAM KANAYAKAN, BANDUNG, INDONESIA';

        $data['directory_name'] = 'portfoliopage2';
        $data['total_photo'] = '30';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }
}
