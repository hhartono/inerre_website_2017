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
        $ducoiter = 0;
        $data['ducos'][$ducoiter]['title'] = "Black - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_black_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_black_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Soft Gray No 2 - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_softgray2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Soft Gray No 2 - High Gloss";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_softgray2_gloss";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_gloss.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Soft Gray No 2 - Barcode - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_softgray2_barcode_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_barcode_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Tundra Gray No 2 - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_tundragray2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Tundra Gray No 2 - Barcode - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_tundragray2_barcode_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_barcode_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Gray No 3 - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Steel Plate - Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_gray3_plate_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_gray3_plate_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Bronze - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Steel Plate - Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_bronze_plate_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_bronze_plate_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Gray No 3 - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_gray3_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_gray3_plate_matte.png";
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Anthracite Gray - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_anthracite_gray_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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
        $data['lamitaks'][5]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_stoffa_mocca.png";

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

        $data['lamitaks'][9]['title'] = "Kiro Shizuoka Oak";
        $data['lamitaks'][9]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][9]['controller'] = "LibraryV1/lamitak_kiro_shizuoka_oak";
        $data['lamitaks'][9]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_kiro_shizuoka_oak.png";

        $data['lamitaks'][10]['title'] = "Fondue Ash";
        $data['lamitaks'][10]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][10]['controller'] = "LibraryV1/lamitak_fondue_ash";
        $data['lamitaks'][10]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        /* HPL AICA section */
        $data['aicas'][0]['title'] = "Antique White Leather";
        $data['aicas'][0]['subtitle'] = "HPL AICA";
        $data['aicas'][0]['controller'] = "LibraryV1/aica_antique_white_leather";
        $data['aicas'][0]['sample_url'] = "/assets/images/inerre/library/hpl/aica_antique_white_leather.png";

        $data['aicas'][1]['title'] = "Medium Berry Teak";
        $data['aicas'][1]['subtitle'] = "HPL AICA";
        $data['aicas'][1]['controller'] = "LibraryV1/aica_medium_berry_teak";
        $data['aicas'][1]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][2]['title'] = "Gray Artizan Oak";
        $data['aicas'][2]['subtitle'] = "HPL AICA";
        $data['aicas'][2]['controller'] = "LibraryV1/aica_gray_artizan_oak";
        $data['aicas'][2]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][3]['title'] = "Light Gray Rasen";
        $data['aicas'][3]['subtitle'] = "HPL AICA";
        $data['aicas'][3]['controller'] = "LibraryV1/aica_light_gray_rasen";
        $data['aicas'][3]['sample_url'] = "/assets/images/inerre/library/hpl/aica_light_gray_rasen.png";

        $data['aicas'][4]['title'] = "Linen Walk the Line";
        $data['aicas'][4]['subtitle'] = "HPL EDL";
        $data['aicas'][4]['controller'] = "LibraryV1/edl_linen_walk";
        $data['aicas'][4]['sample_url'] = "/assets/images/inerre/library/hpl/edl_linen_walk_line.png";

        /* veneer section */
        $data['veneers'][0]['title'] = "Oak - Coffee Open Pore";
        $data['veneers'][0]['subtitle'] = "Veneer";
        $data['veneers'][0]['controller'] = "LibraryV1/oak_coffeeopenpore";
        $data['veneers'][0]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore.png";

        $data['veneers'][1]['title'] = "Oak - Coffee Open Pore - Barcode";
        $data['veneers'][1]['subtitle'] = "Veneer";
        $data['veneers'][1]['controller'] = "LibraryV1/oak_coffeeopenpore_barcode";
        $data['veneers'][1]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_barcode.png";

        $data['veneers'][2]['title'] = "Oak - Coffee Open Pore - 2 x 2";
        $data['veneers'][2]['subtitle'] = "Veneer";
        $data['veneers'][2]['controller'] = "LibraryV1/oak_coffeeopenpore_2x2";
        $data['veneers'][2]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_2x2.png";

        $data['veneers'][3]['title'] = "Walnut - Smoke";
        $data['veneers'][3]['subtitle'] = "Veneer";
        $data['veneers'][3]['controller'] = "LibraryV1/walnut_smoke";
        $data['veneers'][3]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";

        $data['veneers'][4]['title'] = "Walnut - Smoke - Barcode";
        $data['veneers'][4]['subtitle'] = "Veneer";
        $data['veneers'][4]['controller'] = "LibraryV1/walnut_smoke_barcode";
        $data['veneers'][4]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_barcode.png";

        $data['veneers'][5]['title'] = "Walnut - Smoke - 2 x 2";
        $data['veneers'][5]['subtitle'] = "Veneer";
        $data['veneers'][5]['controller'] = "LibraryV1/walnut_smoke_2x2";
        $data['veneers'][5]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_2x2.png";

        $data['veneers'][6]['title'] = "Walnut - Smoke - CNC1";
        $data['veneers'][6]['subtitle'] = "Veneer";
        $data['veneers'][6]['controller'] = "LibraryV1/walnut_smoke_CNC1";
        $data['veneers'][6]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc1.png";

        $data['veneers'][7]['title'] = "Walnut - Smoke - CNC2";
        $data['veneers'][7]['subtitle'] = "Veneer";
        $data['veneers'][7]['controller'] = "LibraryV1/walnut_smoke_CNC2";
        $data['veneers'][7]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['veneers'][8]['title'] = "Walnut - Natural";
        $data['veneers'][8]['subtitle'] = "Veneer";
        $data['veneers'][8]['controller'] = "LibraryV1/walnut_natural";
        $data['veneers'][8]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";

        $data['veneers'][9]['title'] = "Walnut - Natural - CNC1";
        $data['veneers'][9]['subtitle'] = "Veneer";
        $data['veneers'][9]['controller'] = "LibraryV1/walnut_natural_CNC1";
        $data['veneers'][9]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_cnc1.png";

        $data['veneers'][10]['title'] = "Walnut - Natural - Barcode";
        $data['veneers'][10]['subtitle'] = "Veneer";
        $data['veneers'][10]['controller'] = "LibraryV1/walnut_natural_barcode";
        $data['veneers'][10]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_barcode.png";

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

    public function duco_softgray2_gloss()
    {
        $data['title'] = "Soft Gray No 2 - High Gloss";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_softgray2_gloss.png";

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

    public function duco_tundragray2_barcode_matte()
    {
        $data['title'] = "Tundra Gray No 2 - Barcode - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_tundragray2_barcode_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_gray3_plate_matte()
    {
        $data['title'] = "Gray No 3 - Matte";
        $data['subtitle'] = "Steel Plate - Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_gray3_plate_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_bronze_plate_matte()
    {
        $data['title'] = "Bronze - Matte";
        $data['subtitle'] = "Steel Plate - Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_bronze_plate_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_gray3_matte()
    {
        $data['title'] = "Gray No 3 - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_gray3_plate_matte.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_anthracite_gray_matte()
    {
        $data['title'] = "Anthracite Gray - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function lamitak_kiro_shizuoka_oak()
    {
        $data['title'] = "Kiro Shizuoka Oak";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_kiro_shizuoka_oak.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_fondue_ash()
    {
        $data['title'] = "Fondue Ash";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; //DUMMY

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

    public function aica_medium_berry_teak()
    {
        $data['title'] = "Medium Berry Teak";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; //DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function aica_gray_artizan_oak()
    {
        $data['title'] = "Gray Artizan Oak";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; //DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function aica_light_gray_rasen()
    {
        $data['title'] = "Light Gray Rasen";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/aica_light_gray_rasen.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function edl_linen_walk()
    {
        $data['title'] = "Linen Walk the Line";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/edl_linen_walk_line.png";

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

    public function oak_coffeeopenpore_2x2()
    {
        $data['title'] = "Oak - Coffee Open Pore - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_2x2.png";

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

    public function walnut_smoke_2x2()
    {
        $data['title'] = "Walnut - Smoke - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_2x2.png";

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

    public function walnut_smoke_CNC2()
    {
        $data['title'] = "Walnut - Smoke - CNC2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function walnut_natural_barcode()
    {
        $data['title'] = "Walnut - Natural - Barcode";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_barcode.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }
}
