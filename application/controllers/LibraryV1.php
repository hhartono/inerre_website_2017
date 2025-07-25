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

        $data['ducos'][$ducoiter]['title'] = "Soft Gray No 2 - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_softgray2_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
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

        $data['ducos'][$ducoiter]['title'] = "Tundra Gray No 2 - Barcode - 2 x 2";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_tundragray2_2x2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Tundra Gray No 2 - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_tundragray2_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
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
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Lava Gray - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_lava_gray_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Lava Gray - Matte - 2 x 2";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_lava_gray_2x2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Lava Gray - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_lava_gray_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Espresso - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_espresso_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Espresso - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_espresso_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Turmeric - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_turmeric_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Beige - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_beige_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Acid - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_acid_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Cast Iron - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_castiron_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "London Gray - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_londongray_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Beige - Matte - 4 x 2";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_beige_4x2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Ivory White - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_ivorywhite_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Cashmere Gray - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_cashmeregray_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Sand - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_sand_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Sand - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_sand_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Ivory White - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_ivorywhite_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Taupe - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_taupe_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Taupe - Matte - CNC1";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_taupe_CNC1_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Taupe - Matte - 2 x 2";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_taupe_2x2_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

        $data['ducos'][$ducoiter]['title'] = "Bronze - Matte";
        $data['ducos'][$ducoiter]['subtitle'] = "Duco";
        $data['ducos'][$ducoiter]['controller'] = "LibraryV1/duco_bronze_matte";
        $data['ducos'][$ducoiter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $ducoiter++;

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

        $data['lamitaks'][16]['title'] = "Fiona Marmol Suprema";
        $data['lamitaks'][16]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][16]['controller'] = "LibraryV1/lamitak_fiona_marmol_suprema";
        $data['lamitaks'][16]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][17]['title'] = "Shiro Chidori";
        $data['lamitaks'][17]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][17]['controller'] = "LibraryV1/lamitak_shiro_chidori";
        $data['lamitaks'][17]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][18]['title'] = "Taupe";
        $data['lamitaks'][18]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][18]['controller'] = "LibraryV1/lamitak_taupe";
        $data['lamitaks'][18]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][19]['title'] = "Sullivan Faux Denim";
        $data['lamitaks'][19]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][19]['controller'] = "LibraryV1/lamitak_sullivan_faux_denim";
        $data['lamitaks'][19]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][20]['title'] = "Stoffa Crema";
        $data['lamitaks'][20]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][20]['controller'] = "LibraryV1/lamitak_stoffa_crema";
        $data['lamitaks'][20]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $data['lamitaks'][21]['title'] = "Cloudy Cement";
        $data['lamitaks'][21]['subtitle'] = "HPL Lamitak";
        $data['lamitaks'][21]['controller'] = "LibraryV1/lamitak_cloudy_cement";
        $data['lamitaks'][21]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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

        $data['aicas'][3]['title'] = "Morning Tanny Oak";
        $data['aicas'][3]['subtitle'] = "HPL AICA";
        $data['aicas'][3]['controller'] = "LibraryV1/aica_morning_tanny_oak";
        $data['aicas'][3]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][4]['title'] = "Light Gray Rasen";
        $data['aicas'][4]['subtitle'] = "HPL AICA";
        $data['aicas'][4]['controller'] = "LibraryV1/aica_light_gray_rasen";
        $data['aicas'][4]['sample_url'] = "/assets/images/inerre/library/hpl/aica_light_gray_rasen.png";

        $data['aicas'][5]['title'] = "Mocassin Ivory";
        $data['aicas'][5]['subtitle'] = "HPL TACO";
        $data['aicas'][5]['controller'] = "LibraryV1/taco_mocassin_ivory";
        $data['aicas'][5]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][6]['title'] = "Olivie Afromosia";
        $data['aicas'][6]['subtitle'] = "HPL TACO";
        $data['aicas'][6]['controller'] = "LibraryV1/taco_olivie_afromosia";
        $data['aicas'][6]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][7]['title'] = "Linen Walk the Line";
        $data['aicas'][7]['subtitle'] = "HPL EDL";
        $data['aicas'][7]['controller'] = "LibraryV1/edl_linen_walk";
        $data['aicas'][7]['sample_url'] = "/assets/images/inerre/library/hpl/edl_linen_walk_line.png";

        $data['aicas'][8]['title'] = "Katovik Noce";
        $data['aicas'][8]['subtitle'] = "HPL EDL";
        $data['aicas'][8]['controller'] = "LibraryV1/edl_katovik_noce";
        $data['aicas'][8]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][9]['title'] = "Antique Oak";
        $data['aicas'][9]['subtitle'] = "HPL EDL";
        $data['aicas'][9]['controller'] = "LibraryV1/edl_antique_oak";
        $data['aicas'][9]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][10]['title'] = "Cosmopolitan";
        $data['aicas'][10]['subtitle'] = "HPL EDL";
        $data['aicas'][10]['controller'] = "LibraryV1/edl_cosmopolitan";
        $data['aicas'][10]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][11]['title'] = "Rodez Oak";
        $data['aicas'][11]['subtitle'] = "HPL EDL";
        $data['aicas'][11]['controller'] = "LibraryV1/edl_rodez_oak";
        $data['aicas'][11]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $data['aicas'][12]['title'] = "Mediterranean";
        $data['aicas'][12]['subtitle'] = "HPL EDL";
        $data['aicas'][12]['controller'] = "LibraryV1/edl_mediterranean";
        $data['aicas'][12]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

        $data['veneers'][$veneeriter]['title'] = "Oak - Coffee Open Pore - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_coffeeopenpore_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
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

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoky";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoky";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoky - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoky_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_2x2.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Walnut - Smoky - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_smoky_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_cnc1.png";
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

        $data['veneers'][$veneeriter]['title'] = "Walnut - Honey";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/walnut_honey";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Dune";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_dune";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/oak_dune.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Dune - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_dune_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/veneer/oak_dune.png";
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Dune - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_dune_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Autumn";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_autumn";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Autumn - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_autumn_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Autumn - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_autumn_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Tokyo";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_tokyo";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Tokyo - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_tokyo_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Tokyo - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_tokyo_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Butter";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_butter";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Butter - 2 x 2";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_butter_2x2";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $data['veneers'][$veneeriter]['title'] = "Oak - Butter - CNC1";
        $data['veneers'][$veneeriter]['subtitle'] = "Veneer";
        $data['veneers'][$veneeriter]['controller'] = "LibraryV1/oak_butter_CNC1";
        $data['veneers'][$veneeriter]['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY
        $veneeriter++;

        $this->load->helper('url');
        $this->load->view('library/landing', $data);
	}

    /*
    *
    * DUCO SECTION
    *
    */

    public function duco_ivorywhite_matte()
    {
        $data['title'] = "Ivory White - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

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

    public function duco_softgray2_CNC1_matte()
    {
        $data['title'] = "Soft Gray No 2 - Matte - CVC1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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

    public function duco_tundragray2_2x2_matte()
    {
        $data['title'] = "Tundra Gray No 2 - 2 x 2 - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_tundragray2_CNC1_matte()
    {
        $data['title'] = "Tundra Gray No 2 - CNC1 - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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

    public function duco_lava_gray_matte()
    {
        $data['title'] = "Lava Gray - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_lava_gray_2x2_matte()
    {
        $data['title'] = "Anthracite Gray - Matte - 2 x 2";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_lava_gray_CNC1_matte()
    {
        $data['title'] = "Anthracite Gray - Matte - CNC1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_espresso_matte()
    {
        $data['title'] = "Espresso - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_espresso_CNC1_matte()
    {
        $data['title'] = "Espresso - Matte - CNC1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_turmeric_matte()
    {
        $data['title'] = "Turmeric - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_beige_matte()
    {
        $data['title'] = "Beige - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_acid_matte()
    {
        $data['title'] = "Acid - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_castiron_matte()
    {
        $data['title'] = "Cast Iron - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_londongray_matte()
    {
        $data['title'] = "London Gray - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_beige_4x2_matte()
    {
        $data['title'] = "Beige - Matte - 4 x 2";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_cashmeregray_matte()
    {
        $data['title'] = "Cashmere Gray - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_sand_matte()
    {
        $data['title'] = "Sand - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_sand_CNC1_matte()
    {
        $data['title'] = "Sand - Matte - CNC1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_taupe_matte()
    {
        $data['title'] = "Taupe - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_taupe_CNC1_matte()
    {
        $data['title'] = "Taupe - Matte - CNC1";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_taupe_2x2_matte()
    {
        $data['title'] = "Taupe - Matte - 2 x 2";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/duco/duco_view', $data);
    }

    public function duco_bronze_matte()
    {
        $data['title'] = "Bronze - Matte";
        $data['subtitle'] = "Duco (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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

    public function lamitak_fiona_marmol_suprema()
    {
        $data['title'] = "Fiona Marmol Suprema";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_shiro_chidori()
    {
        $data['title'] = "Shiro Chidori";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_taupe()
    {
        $data['title'] = "Taupe";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_sullivan_faux_denim()
    {
        $data['title'] = "Sullivan Faux Denim";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_stoffa_crema()
    {
        $data['title'] = "Stoffa Crema";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

        $this->load->helper('url');
        $this->load->view('library/hpl/lamitak_hpl', $data);
    }

    public function lamitak_cloudy_cement()
    {
        $data['title'] = "Cloudy Cement";
        $data['subtitle'] = "HPL Lamitak (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png";

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

    public function aica_morning_tanny_oak()
    {
        $data['title'] = "Morning Tanny Oak";
        $data['subtitle'] = "HPL AICA (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function edl_katovik_noce()
    {
        $data['title'] = "Katovik Noce";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function edl_antique_oak()
    {
        $data['title'] = "Antique Oak";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function edl_cosmopolitan()
    {
        $data['title'] = "Cosmopolitan";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function edl_rodez_oak()
    {
        $data['title'] = "Rodez Oak";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/hpl/aica_hpl', $data);
    }

    public function edl_mediterranean()
    {
        $data['title'] = "Mediterranean";
        $data['subtitle'] = "HPL EDL (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function taco_mocassin_ivory()
    {
        $data['title'] = "Mocassin Ivory";
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

    public function oak_coffeeopenpore_CNC1()
    {
        $data['title'] = "Oak - Coffee Open Pore - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

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

    public function walnut_smoky()
    {
        $data['title'] = "Walnut - Smoky";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_smoky_2x2()
    {
        $data['title'] = "Walnut - Smoky - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_smoke_2x2.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function walnut_smoky_CNC1()
    {
        $data['title'] = "Walnut - Smoky - CNC1";
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

    public function walnut_honey()
    {
        $data['title'] = "Walnut - Honey";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/walnut_natural.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_dune()
    {
        $data['title'] = "Oak - Dune";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/oak_dune.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_dune_2x2()
    {
        $data['title'] = "Oak - Dune - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/veneer/oak_dune.png";

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_dune_CNC1()
    {
        $data['title'] = "Oak - Dune - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_autumn()
    {
        $data['title'] = "Oak - Autumn";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_autumn_CNC1()
    {
        $data['title'] = "Oak - Autumn - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_autumn_2x2()
    {
        $data['title'] = "Oak - Autumn - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_tokyo()
    {
        $data['title'] = "Oak - Tokyo";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_tokyo_CNC1()
    {
        $data['title'] = "Oak - Tokyo - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_tokyo_2x2()
    {
        $data['title'] = "Oak - Tokyo - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_butter()
    {
        $data['title'] = "Oak - Butter";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_butter_2x2()
    {
        $data['title'] = "Oak - Butter - 2 x 2";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }

    public function oak_butter_CNC1()
    {
        $data['title'] = "Oak - Butter - CNC1";
        $data['subtitle'] = "Veneer (TAP to ENLARGE)";
        $data['sample_url'] = "/assets/images/inerre/library/sample_dummy.png"; // DUMMY

        $this->load->helper('url');
        $this->load->view('library/veneer/veneer_view', $data);
    }
}
