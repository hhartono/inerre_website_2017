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

    public function adiyofi_project()
    {
        $this->load->helper('url');
        $this->load->view('pano/adiyofiproject');
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

    public function ayu_project()
    {
        //$data['rows'][0]['title'] = "AYU - KELAPA GADING - Master Bedroom Lantai 2";
        //$data['rows'][0]['url'] = "http://18.139.219.177/ayurtu2vtour1/tour.html";
        //$data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][0]['title'] = "AYU - KELAPA GADING - Master Bedroom Lantai 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/ayurtu2vtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function priscilia_project()
    {
        $data['rows'][0]['title'] = "PRISCILIA - SURABAYA - All Rooms";
        $data['rows'][0]['url'] = "http://18.139.219.177/prisciliavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "PRISCILIA - SURABAYA - Ruang Tidur Orang Tua";
        $data['rows'][1]['url'] = "http://18.139.219.177/prisciliartovtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "PRISCILIA - SURABAYA - Office";
        $data['rows'][2]['url'] = "http://18.139.219.177/prisciliaofficevtour/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
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

    public function soegiharto_project() // TEMPORARY: lupa diganti di pdfnya
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION - REVISION 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/soegiharto/Soegiharto_Presentation_16.09.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/soegihartortuvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev2()
    {
        /*$data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/soegiharto/Soegiharto_Presentation_19.08.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC";
        $data['rows'][1]['url'] = "http://18.139.219.177/soegihartortuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";*/

        $data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION - REVISION 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/soegiharto/Soegiharto_Presentation_16.09.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/soegihartortuvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev3()
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 3";
        $data['rows'][0]['url'] = "http://18.139.219.177/soegihartortuvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev4()
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 4";
        $data['rows'][0]['url'] = "http://18.139.219.177/soegihartortuvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

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

    public function erlina_project()
    {
        $data['rows'][0]['title'] = "ERLINA - SURABAYA - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://18.139.219.177/erlinartuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function alvin_project()
    {
        $data['rows'][0]['title'] = "ALVIN - CIREBON - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://18.139.219.177/alvinrtuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function chrisna_project()
    {
        $data['rows'][0]['title'] = "CHRISNA - LAMANDAU - Lantai 2 SketchUp";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/chrisna/ChrisnaGrace_Lt2_280820.skp";
        $data['rows'][0]['button_title'] = "download SketchUp file";

        $data['rows'][1]['title'] = "CHRISNA - LAMANDAU - Lantai 2 Material Palette";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/chrisna/ChrisnaGrace_Material_Lt2_280820.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "CHRISNA - LAMANDAU - Lantai 1 - 360 Rendering";
        $data['rows'][2]['url'] = "http://18.139.219.177/chrisnavtourlt1/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "CHRISNA - LAMANDAU - Lantai 2 - 360 Rendering";
        $data['rows'][3]['url'] = "http://18.139.219.177/chrisnavtourlt2/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";
        
        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function davin_project()
    {
        $data['rows'][0]['title'] = "DAVIN - CINERE - DESIGN PRESENTATION PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/davin/Davin_Phase1_280820.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "DAVIN - CINERE - 360 RENDERING PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/davinvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sariwati_project()
    {
        $data['rows'][0]['title'] = "SARIWATI - ANCOL - DESIGN PRESENTATION - STUDY ROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/sariwati/Sariwati_Presentation_08.01.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SARIWATI - ANCOL - 360 RENDERING - STUDY ROOM";
        $data['rows'][1]['url'] = "http://18.139.219.177/sariwatistudyroomvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "SARIWATI - ANCOL - DESIGN PRESENTATION - RTA1";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/sariwati/Sariwati_Presentation_27.11.2020.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][3]['title'] = "SARIWATI - ANCOL - 360 RENDERING - RTA1";
        $data['rows'][3]['url'] = "http://18.139.219.177/sariwatirta1vtour/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function puja_project()
    {
        $data['rows'][0]['title'] = "PUJA - 360 RENDERING PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pujavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function timothy_project()
    {
        $data['rows'][0]['title'] = "TIMOTHY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/timothyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ferry_project()
    {
        $data['rows'][0]['title'] = "FERRY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/ferryrtuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function david_project()
    {
        $data['rows'][0]['title'] = "DAVID - DESIGN PRESENTATION - RTU & WIC UTAMA";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/david/David_Presentation_19.03.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "DAVID - 360 RENDERING - RTU & WIC UTAMA";
        $data['rows'][1]['url'] = "http://18.139.219.177/davidvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function edward_project()
    {
        $data['rows'][0]['title'] = "EDWARD - DESIGN PRESENTATION - LIVING & PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/edward/Edward_Presentation_08.01.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "EDWARD - 360 RENDERING - LIVING & PANTRY";
        $data['rows'][1]['url'] = "http://18.139.219.177/edwardvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function edward_project_2()
    {
        $data['rows'][0]['title'] = "EDWARD - DESIGN PRESENTATION - RTU & WIC UTAMA";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/edward/Edward_Presentation_19.03.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "EDWARD - 360 RENDERING - RTU & WIC UTAMA";
        $data['rows'][1]['url'] = "http://18.139.219.177/edwardrtuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project()
    {
        $data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 1 - REV1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/putri/Putri_Presentation_22.01.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "PUTRI - 360 RENDERING - PHASE 1 - REV1";
        $data['rows'][1]['url'] = "http://18.139.219.177/putrivtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project_2()
    {
        //$data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/putri/Putri_Presentation_22.01.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "PUTRI - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/putrivtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project_3()
    {
        //$data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 3";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/putri/Putri_Presentation_06.04.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "PUTRI - 360 RENDERING - PHASE 3 - REV1";
        $data['rows'][0]['url'] = "http://18.139.219.177/putrivtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lusiana_project()
    {
        //$data['rows'][0]['title'] = "LUSIANA - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/lusiana/Lusiana_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "LUSIANA - 360 RENDERING - PHASE 1 & 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/lusianavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lina_project()
    {
        //$data['rows'][0]['title'] = "LUSIANA - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/lusiana/Lusiana_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "LINA - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/linavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    /*
    public function lusiana_project_2()
    {
        $data['rows'][0]['title'] = "LUSIANA - DESIGN PRESENTATION - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/lusiana/Lusiana_Presentation_11.02.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "LUSIANA - 360 RENDERING - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/lusianavtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }
    */

    public function shen_project()
    {
        //$data['rows'][0]['title'] = "MR. SHEN - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/shen/MrShen_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "MR. SHEN - INTERACTIVE PANTRY PRESENTATION - PHASE 1 - REV2 (BEST VIEWED USING PC or MAC)";
        $data['rows'][0]['url'] = "https://view.genial.ly/60a4c9f1de04a30d2bea4d25/interactive-image-mr-shenisometric-detail-pantry19052021";
        $data['rows'][0]['button_title'] = "see presentation";

        $data['rows'][1]['title'] = "MR. SHEN - 360 RENDERING - PHASE 1 - REV2";
        $data['rows'][1]['url'] = "http://18.139.219.177/shenvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/william/William_Presentation_26.03.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/williamvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_2()
    {
        //$data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/william/William_Presentation_26.03.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "WILLIAM - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/williamvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function yusuf_project()
    {
        $data['rows'][0]['title'] = "YUSUF - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/yusufvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ellen_project()
    {
        $data['rows'][0]['title'] = "ELLEN - DESIGN PRESENTATION - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/ellen/Ellen_Presentation_07.05.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "ELLEN - 360 RENDERING - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/ellenvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function intercontinental_project()
    {
        $data['rows'][0]['title'] = "INTERCONTINENTAL - DESIGN PRESENTATION - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/intercontinental/Intercontinental_Presentation_28.05.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "INTERCONTINENTAL - 360 RENDERING - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/intercontinentalvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project()
    {
        $data['rows'][0]['title'] = "LENY - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/ernivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - SUPPORTING DOCUMENT - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/erni/Erni_Presentation_15.06.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function test_eksisting()
    {
        $this->load->helper('url');
        $this->load->view('pano/testeksisting');
    }
}
