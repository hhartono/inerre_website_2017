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

        $data['ducos'][$ducoiter]['title'] = "Black - High Gloss";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_black_gloss";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
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
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/duco/duco_anthracite_gray_matte.png";

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
        $data['lamitaks'][10]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_fondue_ash.png";

        $data['lamitaks'][11]['title'] = "Urban Slate";
        $data['lamitaks'][11]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][11]['controller'] = "LibraryV1/lamitak_urban_slate";
        $data['lamitaks'][11]['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_urban_slate.png";

        $data['lamitaks'][12]['title'] = "Hermes Marcello Walnut";
        $data['lamitaks'][12]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][12]['controller'] = "LibraryV1/lamitak_hermes_marcello_walnut";
        $data['lamitaks'][12]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][13]['title'] = "Febe Noce Portofino";
        $data['lamitaks'][13]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][13]['controller'] = "LibraryV1/lamitak_febe_noce_portofino";
        $data['lamitaks'][13]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][14]['title'] = "Gloss Wheat";
        $data['lamitaks'][14]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][14]['controller'] = "LibraryV1/lamitak_gloss_wheat";
        $data['lamitaks'][14]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][15]['title'] = "Stoffa Grigio - Custom 1";
        $data['lamitaks'][15]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][15]['controller'] = "LibraryV1/lamitak_stoffa_grigio_custom_1";
        $data['lamitaks'][15]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        /* HPL AICA section */
        $data['aicas'][0]['title'] = "Antique White Leather";
        $data['aicas'][0]['subtitle'] = "HPL AICA";
        $data['aicas'][0]['controller'] = "LibraryV1/aica_antique_white_leather";
        $data['aicas'][0]['sample_url'] = "/assets/images/inerre/library/hpl/aica_antique_white_leather.png";

        $data['aicas'][1]['title'] = "Medium Berry Teak";
        $data['aicas'][1]['subtitle'] = "HPL AICA";
        $data['aicas'][1]['controller'] = "LibraryV1/aica_medium_berry_teak";
        $data['aicas'][1]['sample_url'] = "/assets/images/inerre/library/hpl/aica_medium_berry_teak";

        $data['aicas'][2]['title'] = "Gray Artizan Oak";
        $data['aicas'][2]['subtitle'] = "HPL AICA";
        $data['aicas'][2]['controller'] = "LibraryV1/aica_gray_artizan_oak";
        $data['aicas'][2]['sample_url'] = "/assets/images/inerre/library/hpl/aica_gray_artizan_oak.png";

        $data['aicas'][3]['title'] = "Light Gray Rasen";
        $data['aicas'][3]['subtitle'] = "HPL AICA";
        $data['aicas'][3]['controller'] = "LibraryV1/aica_light_gray_rasen";
        $data['aicas'][3]['sample_url'] = "/assets/images/inerre/library/hpl/aica_light_gray_rasen.png";

        $data['aicas'][4]['title'] = "Linen Walk the Line";
        $data['aicas'][4]['subtitle'] = "HPL EDL";
        $data['aicas'][4]['controller'] = "LibraryV1/edl_linen_walk";
        $data['aicas'][4]['sample_url'] = "/assets/images/inerre/library/hpl/edl_linen_walk_line.png";

        $data['aicas'][5]['title'] = "Olivie Afromosia";
        $data['aicas'][5]['subtitle'] = "HPL TACO";
        $data['aicas'][5]['controller'] = "LibraryV1/taco_olivie_afromosia";
        $data['aicas'][5]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        /* veneer section */
        $veneeriter = 0;
        $data['veneers'][$veneeriter]['title'] = "Oak - Coffee Open Pore";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_coffeeopenpore";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Coffee Open Pore - Barcode";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_coffeeopenpore_barcode";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_barcode.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Coffee Open Pore - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_coffeeopenpore_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/oak_coffeeopenpore_2x2.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Natural";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_natural";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Mink";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_mink";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Rough Cut Oak - Mink Oak";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/roughcutoak_minkoak";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoke";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoke";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoke - Barcode";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoke_barcode";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_barcode.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoke - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoke_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_2x2.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoke - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoke_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc1.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoke - CNC2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoke_CNC2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc2.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Natural";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_natural";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Natural - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_natural_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Natural - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_natural_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_cnc1.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Natural - Barcode";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_natural_barcode";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural_barcode.png";
        $veneeriter++;

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

    public function duco_black_gloss()
    {
        $data['title'] = "Black - High Gloss";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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
        $data['sample_url'] = "/assets/images/inerre/library/duco/duco_anthracite_gray_matte.png";

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

    public function lamitak_stoffa_nero()
    {
        $data['title'] = "Stoffa Nero";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_georgian_slate()
    {
        $data['title'] = "Georgian Slate";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_fondue_ash.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_urban_slate()
    {
        $data['title'] = "Urban Slate";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/lamitak_urban_slate.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_hermes_marcello_walnut()
    {
        $data['title'] = "Hermes Marcello Walnut";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_febe_noce_portofino()
    {
        $data['title'] = "Febe Noce Portofino";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_gloss_wheat()
    {
        $data['title'] = "Gloss Wheat";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_stoffa_grigio_custom_1()
    {
        $data['title'] = "Stoffa Grigio - Custom 1";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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
        $data['sample_url'] = "/assets/images/inerre/library/hpl/aica_medium_berry_teak.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function aica_gray_artizan_oak()
    {
        $data['title'] = "Gray Artizan Oak";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/hpl/aica_gray_artizan_oak.png";

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

    public function taco_olivie_afromosia()
    {
        $data['title'] = "Olivie Afromosia";
        $data['subtitle'] = "HPL TACO (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function oak_natural()
    {
        $data['title'] = "Oak - Natural";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_mink()
    {
        $data['title'] = "Oak - Mink";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function roughcutoak_minkoak()
    {
        $data['title'] = "Rough Cut Oak - Mink Oak";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc2.png";

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

    public function walnut_natural_2x2()
    {
        $data['title'] = "Walnut - Natural - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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
