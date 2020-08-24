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
        /* duco section */
        $data['ducos'][0]['title'] = "Black - Matte";
        $data['ducos'][0]['subtitle'] = "Duco";
        $data['ducos'][0]['controller'] = "LibraryV1/duco_black_matte";
        $data['ducos'][0]['sample_url'] = "/assets/images/inerre/library/duco/duco_black_matte.png";

        $data['ducos'][1]['title'] = "Soft Gray No 2 - Matte";
        $data['ducos'][1]['subtitle'] = "Duco";
        $data['ducos'][1]['controller'] = "LibraryV1/duco_softgray2_mattee";
        $data['ducos'][1]['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_matte.png";

        $data['ducos'][2]['title'] = "Soft Gray No 2 - Barcode - Matte";
        $data['ducos'][2]['subtitle'] = "Duco";
        $data['ducos'][2]['controller'] = "LibraryV1/duco_softgray2_barcode_matte";
        $data['ducos'][2]['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_barcode_matte.png";

        $data['ducos'][3]['title'] = "Tundra Gray No 2 - Matte";
        $data['ducos'][3]['subtitle'] = "Duco";
        $data['ducos'][3]['controller'] = "LibraryV1/duco_tundragray2_matte";
        $data['ducos'][3]['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_matte.png";

        $data['ducos'][4]['title'] = "Gray No 3 - Matte";
        $data['ducos'][4]['subtitle'] = "Steel Plate - Duco";
        $data['ducos'][4]['controller'] = "LibraryV1/duco_gray3_plate_matte";
        $data['ducos'][4]['sample_url'] = "/assets/images/inerre/library/duco/duco_gray3_plate_matte.png";

        $data['ducos'][5]['title'] = "Bronze - Matte";
        $data['ducos'][5]['subtitle'] = "Steel Plate - Duco";
        $data['ducos'][5]['controller'] = "LibraryV1/duco_bronze_plate_matte";
        $data['ducos'][5]['sample_url'] = "/assets/images/inerre/library/duco/duco_bronze_plate_matte.png";

        /* HPL Lamitak section */
        $data['lamitaks'][0]['title'] = "Taglio Marcello Walnut";
        $data['lamitaks'][0]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][0]['controller'] = "LibraryV1/lamitak_taglio_marcello_walnut";
        $data['lamitaks'][0]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_taglio_marcello_walnut.png";

        $data['lamitaks'][1]['title'] = "Tito Ercolano";
        $data['lamitaks'][1]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][1]['controller'] = "LibraryV1/lamitak_tito_ercolano";
        $data['lamitaks'][1]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_tito_ercolano.png";

        $data['lamitaks'][2]['title'] = "Fico Florentina Marble";
        $data['lamitaks'][2]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][2]['controller'] = "LibraryV1/lamitak_fico_florentina_marble";
        $data['lamitaks'][2]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_fico_florentina_marble.png";

        $data['lamitaks'][3]['title'] = "Ciara Marmol Suprema";
        $data['lamitaks'][3]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][3]['controller'] = "LibraryV1/lamitak_ciara_marmol_suprema";
        $data['lamitaks'][3]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_ciara_marmol_suprema.png";

        $data['lamitaks'][4]['title'] = "Stoffa Grigio";
        $data['lamitaks'][4]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][4]['controller'] = "LibraryV1/lamitak_stoffa_grigio";
        $data['lamitaks'][4]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_grigio.png";

        $data['lamitaks'][5]['title'] = "Stoffa Mocca";
        $data['lamitaks'][5]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][5]['controller'] = "LibraryV1/lamitak_stoffa_mocca";
        $data['lamitaks'][5]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_grigio.png"; // TEMPORARY

        $data['lamitaks'][6]['title'] = "Aiden Pashley";
        $data['lamitaks'][6]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][6]['controller'] = "LibraryV1/lamitak_aiden_pashley";
        $data['lamitaks'][6]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_aiden_pashley.png";

        $data['lamitaks'][7]['title'] = "Tanned Rosenheim Maple";
        $data['lamitaks'][7]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][7]['controller'] = "LibraryV1/lamitak_tanned_rosenheim_maple";
        $data['lamitaks'][7]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_tanned_rosenheim_maple.png";

        $data['lamitaks'][8]['title'] = "Biaggio Noce Roma";
        $data['lamitaks'][8]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][8]['controller'] = "LibraryV1/lamitak_biaggio_noce_roma";
        $data['lamitaks'][8]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_biaggio_noce_roma.png";

        /* HPL AICA section */
        $data['aicas'][0]['title'] = "Antique White Leather";
        $data['aicas'][0]['subtitle'] = "HPL AICA";
        $data['aicas'][0]['controller'] = "LibraryV1/aica_antique_white_leather";
        $data['aicas'][0]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_grigio.png"; // TEMPORARY

        /* veneer section */
        $data['veneers'][0]['title'] = "Oak - Coffee Open Pore";
        $data['veneers'][0]['subtitle'] = "Veneer";
        $data['veneers'][0]['controller'] = "LibraryV1/oak_coffeeopenpore";
        $data['veneers'][0]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore.png";

        $data['veneers'][1]['title'] = "Oak - Coffee Open Pore - Barcode";
        $data['veneers'][1]['subtitle'] = "Veneer";
        $data['veneers'][1]['controller'] = "LibraryV1/oak_coffeeopenpore_barcode";
        $data['veneers'][1]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_barcode.png";

        $data['veneers'][2]['title'] = "Walnut - Smoke";
        $data['veneers'][2]['subtitle'] = "Veneer";
        $data['veneers'][2]['controller'] = "LibraryV1/walnut_smoke";
        $data['veneers'][2]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";

        $data['veneers'][3]['title'] = "Walnut - Smoke - Barcode";
        $data['veneers'][3]['subtitle'] = "Veneer";
        $data['veneers'][3]['controller'] = "LibraryV1/walnut_smoke_barcode";
        $data['veneers'][3]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_barcode.png";

        $data['veneers'][4]['title'] = "Walnut - Smoke - CNC1";
        $data['veneers'][4]['subtitle'] = "Veneer";
        $data['veneers'][4]['controller'] = "LibraryV1/walnut_smoke_CNC1";
        $data['veneers'][4]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc1.png";

        $data['veneers'][5]['title'] = "Walnut - Natural";
        $data['veneers'][5]['subtitle'] = "Veneer";
        $data['veneers'][5]['controller'] = "LibraryV1/walnut_natural";
        $data['veneers'][5]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";

        $data['veneers'][6]['title'] = "Walnut - Natural - CNC1";
        $data['veneers'][6]['subtitle'] = "Veneer";
        $data['veneers'][6]['controller'] = "LibraryV1/walnut_natural_CNC1";
        $data['veneers'][6]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_cnc1.png";

        $this->load->helper('url');
        $this->load->view('library/landing', $data);
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

    public function duco_softgray2_barcode_matte()
    {
        $data['title'] = "Soft Gray No 2 - Barcode - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_barcode_matte.png";

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

    public function duco_gray3_plate_matte()
    {
        $data['title'] = "TEST1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_bronze_plate_matte()
    {
        $data['title'] = "TEST2";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    /*
    *
    * HPL Lamitak SECTION
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

    public function lamitak_fico_florentina_marble()
    {
        $data['title'] = "Fico Florentina Marble";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_fico_florentina_marble.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_ciara_marmol_suprema()
    {
        $data['title'] = "Ciara Marmol Suprema";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_ciara_marmol_suprema.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_stoffa_grigio()
    {
        $data['title'] = "Stoffa Grigio";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_grigio.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_stoffa_mocca()
    {
        $data['title'] = "Stoffa Mocca";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_mocca.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_aiden_pashley()
    {
        $data['title'] = "Aiden Pashley";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_aiden_pashley.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_tanned_rosenheim_maple()
    {
        $data['title'] = "Tanned Rosenheim Maple";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_tanned_rosenheim_maple.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_biaggio_noce_roma()
    {
        $data['title'] = "Biaggio Noce Roma";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_biaggio_noce_roma.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    /*
    *
    * HPL AICA SECTION
    *
    */
    public function aica_antique_white_leather()
    {
        $data['title'] = "Antique White Leather";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/aica_antique_white_leather.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
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

    public function walnut_smoke_CNC1()
    {
        $data['title'] = "Walnut - Smoke - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc1.png";

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
