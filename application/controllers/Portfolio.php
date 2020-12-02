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
        $data['client'] = 'YC APARTMENT';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'HEGARMANAH RESIDENCE, BANDUNG, INDONESIA';

        $data['directory_name'] = 'portfoliopage3';
        $data['total_photo'] = '29';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }

    public function portfolio4()
    {
        $data['client'] = 'IS RESIDENCE';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'RANGGAMALELA, BANDUNG, INDONESIA';

        $data['directory_name'] = 'portfoliopage4';
        $data['total_photo'] = '21';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }

    public function portfolio5()
    {
        $data['client'] = 'RD RESIDENCE';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'SINGGASANA PRADANA, BANDUNG, INDONESIA';

        $data['directory_name'] = 'portfoliopage5';
        $data['total_photo'] = '39';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }

    public function portfolio6()
    {
        $data['client'] = 'RN APARTMENT';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'HEGARMANAH RESIDENCE, BANDUNG, INDONESIA';

        $data['directory_name'] = 'portfoliopage6';
        $data['total_photo'] = '33';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }

    public function portfolio7()
    {
        $data['client'] = 'LD RESIDENCE';
        $data['category'] = 'PRIVATE PROPERTY';
        $data['location'] = 'JAKARTA SELATAN, INDONESIA';

        $data['directory_name'] = 'portfoliopage7';
        $data['total_photo'] = '23';

        $this->load->helper('url');
        $this->load->view('portfolio/portfolio_basic', $data);
    }
}
