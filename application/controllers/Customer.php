<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
        $this->load->view('customer/customer_landing');
	}

    public function customer_form()
    {
        $this->load->helper('url');
        $this->load->view('customer/customer_form');
    }

    public function submit_form()
    {
        // submit / update data to database
        print_r($this->input->post('name'));
    }

	public function customer_detail($customer_keyword = NULL)
    {
        if($customer_keyword) {
            $data = array(
                'keyword' => $customer_keyword
            );

            $this->load->helper('url');
            $this->load->view('customer/customer_detail', $data);
        }else{
            echo'Please specify customer keyword';
        }
    }
}
