<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pano extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /*
     * IP Address of server are declared at
     * config/constants.php
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
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ayurtu2vtour1/tour.html";
        //$data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][0]['title'] = "AYU - KELAPA GADING - Master Bedroom Lantai 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ayurtu2vtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function priscilia_project()
    {
        $data['rows'][0]['title'] = "PRISCILIA - SURABAYA - All Rooms";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/prisciliavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "PRISCILIA - SURABAYA - Ruang Tidur Orang Tua";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/prisciliartovtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "PRISCILIA - SURABAYA - Office";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/prisciliaofficevtour/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "PRISCILIA - SURABAYA - Kids Bedroom 2";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/prisciliarta2vtour/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function rinny_project()
    {
        $data['rows'][0]['title'] = "RINNY - CINERE - All Rooms";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/rinnyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "RINNY - CINERE - Master Bedroom";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/rinnyrtuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "RINNY - CINERE - Kids Bedroom 1";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/rinnyrtavtour/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function rinny_project_2()
    {
        $data['rows'][0]['title'] = "RINNY - CINERE - Grandkids Bedroom";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/rinnyrtcvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function rinny_project_3()
    {
        $data['rows'][0]['title'] = "RINNY - CINERE - Home Theather";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/rinnyvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fabiola_project()
    {
        $data['rows'][0]['title'] = "FABIOLA - TASIKMALAYA - Pantry & Dining";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/fabioladiningpantryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fabiola_project_2()
    {
        $data['rows'][0]['title'] = "FABIOLA - TASIKMALAYA - Master Bedroom";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/fabiolavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project() // TEMPORARY: lupa diganti di pdfnya
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION - REVISION 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/soegiharto/Soegiharto_Presentation_16.09.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/soegihartortuvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev2()
    {
        /*$data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/soegiharto/Soegiharto_Presentation_19.08.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/soegihartortuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";*/

        $data['rows'][0]['title'] = "SOEGIHARTO - DESIGN PRESENTATION - REVISION 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/soegiharto/Soegiharto_Presentation_16.09.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/soegihartortuvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev3()
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 3";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/soegihartortuvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function soegiharto_project_rev4()
    {
        $data['rows'][0]['title'] = "SOEGIHARTO - GREEN GARDEN - Master Bedroom & WIC - REVISION 4";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/soegihartortuvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function denny_project()
    {
        $data['rows'][0]['title'] = "DENNY - DESIGN PRESENTATION";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/01_presentation_19082020.pdf";
        $data['rows'][0]['button_title'] = "open PDF document";

        $data['rows'][1]['title'] = "DENNY - TOP TABLE ALTERNATIVE";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/02_top_table.pdf";
        $data['rows'][1]['button_title'] = "open PDF document";

        $data['rows'][2]['title'] = "DENNY - APPLIANCES & SINK ALTERNATIVE";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/03_appliances_sink.pdf";
        $data['rows'][2]['button_title'] = "open PDF document";

        $data['rows'][3]['title'] = "DENNY - OVEN ALTERNATIVE";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/04_oven.pdf";
        $data['rows'][3]['button_title'] = "open PDF document";

        $data['rows'][4]['title'] = "DENNY - WINE DRAWER DETAIL";
        $data['rows'][4]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/05_wine_drawer_detail.png";
        $data['rows'][4]['button_title'] = "open PNG image";

        $data['rows'][5]['title'] = "DENNY - QUOTATION FURNITURE v4";
        $data['rows'][5]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/06_quotation_furniture_v4.pdf";
        $data['rows'][5]['button_title'] = "open PDF document";

        $data['rows'][6]['title'] = "DENNY - QUOTATION FURNITURE v5";
        $data['rows'][6]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/06_quotation_furniture_v5.pdf";
        $data['rows'][6]['button_title'] = "open PDF document";

        $data['rows'][7]['title'] = "DENNY - QUOTATION SIPIL v2";
        $data['rows'][7]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/07_quotation_sipil.pdf";
        $data['rows'][7]['button_title'] = "open PDF document";

        $data['rows'][8]['title'] = "DENNY - RENDERING v4";
        $data['rows'][8]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dennynava/08_rendering.pdf";
        $data['rows'][8]['button_title'] = "open PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erlina_project()
    {
        $data['rows'][0]['title'] = "ERLINA - SURABAYA - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/erlinartuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function alvin_project()
    {
        $data['rows'][0]['title'] = "ALVIN - CIREBON - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/alvinrtuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function alvintisya_project()
    {
        $data['rows'][0]['title'] = "ALVIN - TISYARAKTIKA - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/alvintisyavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function chrisna_project()
    {
        $data['rows'][0]['title'] = "CHRISNA - LAMANDAU - Lantai 2 SketchUp";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/chrisna/ChrisnaGrace_Lt2_280820.skp";
        $data['rows'][0]['button_title'] = "download SketchUp file";

        $data['rows'][1]['title'] = "CHRISNA - LAMANDAU - Lantai 2 Material Palette";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/chrisna/ChrisnaGrace_Material_Lt2_280820.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "CHRISNA - LAMANDAU - Lantai 1 - 360 Rendering";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/chrisnavtourlt1/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "CHRISNA - LAMANDAU - Lantai 2 - 360 Rendering";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/chrisnavtourlt2/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function chrisna_project_2()
    {
        $data['rows'][0]['title'] = "CHRISNA - LAMANDAU - Tambahan - 360 Rendering";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/chrisnavtourlt2tambahan/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function davin_project()
    {
        $data['rows'][0]['title'] = "DAVIN - CINERE - DESIGN PRESENTATION PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/davin/Davin_Phase1_280820.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "DAVIN - CINERE - 360 RENDERING PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/davinvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sariwati_project()
    {
        $data['rows'][0]['title'] = "SARIWATI - ANCOL - DESIGN PRESENTATION - STUDY ROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sariwati/Sariwati_Presentation_08.01.2020.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "SARIWATI - ANCOL - 360 RENDERING - STUDY ROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sariwatistudyroomvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "SARIWATI - ANCOL - DESIGN PRESENTATION - RTA1";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sariwati/Sariwati_Presentation_27.11.2020.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][3]['title'] = "SARIWATI - ANCOL - 360 RENDERING - RTA1";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sariwatirta1vtour/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function puja_project()
    {
        $data['rows'][0]['title'] = "PUJA - 360 RENDERING PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pujavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function timothy_project()
    {
        $data['rows'][0]['title'] = "TIMOTHY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/timothyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ferry_project()
    {
        $data['rows'][0]['title'] = "FERRY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ferryrtuvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function david_project()
    {
        $data['rows'][0]['title'] = "DAVID - DESIGN PRESENTATION - RTU & WIC UTAMA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/david/David_Presentation_19.03.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "DAVID - 360 RENDERING - RTU & WIC UTAMA";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/davidvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lulu_project()
    {
        $data['rows'][0]['title'] = "LULU - 360 RENDERING - PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/luluvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function utami_project()
    {
        $data['rows'][0]['title'] = "UTAMI - 360 RENDERING - LIVING, DINING, PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/utamivtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function edward_project()
    {
        /*
        $data['rows'][0]['title'] = "EDWARD - DESIGN PRESENTATION - LIVING & PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/edward/Edward_Presentation_08.01.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "EDWARD - DESIGN PRESENTATION - RTU & WIC UTAMA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/edward/Edward_Presentation_31.03.2023.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";
        */

        $data['rows'][0]['title'] = "EDWARD - 360 RENDERING - LIVING & PANTRY - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/edwardvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "EDWARD - 360 RENDERING - RTU & WIC UTAMA - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/edwardrtuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "EDWARD - 360 RENDERING - KIDS BEDROOM 1 (EDWARD) - PHASE 3";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/edwardvtour3a/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "EDWARD - 360 RENDERING - KIDS BEDROOM 2 (Priscilla) - PHASE 3";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/edwardvtour3b/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "EDWARD - 360 RENDERING - GYM - PHASE 4";
        $data['rows'][4]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/edwardvtour2/tour.html";
        $data['rows'][4]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project()
    {
        $data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 1 - REV1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/putri/Putri_Presentation_22.01.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "PUTRI - 360 RENDERING - PHASE 1 - REV1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/putrivtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project_2()
    {
        //$data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/putri/Putri_Presentation_22.01.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "PUTRI - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/putrivtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function putri_project_3()
    {
        //$data['rows'][0]['title'] = "PUTRI - DESIGN PRESENTATION - PHASE 3";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/putri/Putri_Presentation_06.04.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "PUTRI - 360 RENDERING - PHASE 3 - REV1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/putrivtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lusiana_project()
    {
        //$data['rows'][0]['title'] = "LUSIANA - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/lusiana/Lusiana_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "LUSIANA - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lusianavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lusiana_project_3()
    {
        $data['rows'][1]['title'] = "LUSIANA - 360 RENDERING - PHASE 3";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lusianavtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lina_project()
    {
        //$data['rows'][0]['title'] = "LUSIANA - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/lusiana/Lusiana_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "LINA - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/linavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project()
    {
        //$data['rows'][0]['title'] = "MR. SHEN - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/shen/MrShen_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        // REV2
        //$data['rows'][0]['title'] = "MR. SHEN - INTERACTIVE PANTRY PRESENTATION - PHASE 1 - REV2 (BEST VIEWED USING PC or MAC)";
        //$data['rows'][0]['url'] = "https://view.genial.ly/60a4c9f1de04a30d2bea4d25/interactive-image-mr-shenisometric-detail-pantry19052021";
        //$data['rows'][0]['button_title'] = "see presentation";

        // REV3
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 1 - REV3";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN - MATERIAL PRESENTATION - PHASE 1 - REV3";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/shen/MrShen_Material_25.08.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "MR. SHEN - ISLAND WIRING DIAGRAM - PHASE 1 - REV3";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/shen/MrShen_Island_Wiring_25.08.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][3]['title'] = "MR. SHEN - INTERACTIVE PANTRY PRESENTATION - PHASE 1 - REV3 (BEST VIEWED USING PC or MAC)";
        $data['rows'][3]['url'] = "https://view.genial.ly/60f51e9b18617d0fadf929c2/interactive-image-mr-shenisometric-detail-pantry19072021";
        $data['rows'][3]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_2()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 2 - DAPUR KOTOR";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "MR. SHEN - 360 RENDERING - PHASE 2 - FOYER";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour3/tour.html";
        //$data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN -  PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/shen/MrShen_Presentation_01.04.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "MR. SHEN - INTERACTIVE PANTRY PRESENTATION - PHASE 2 (BEST VIEWED USING PC or MAC)";
        //$data['rows'][2]['url'] = "https://view.genial.ly/60f51e9b18617d0fadf929c2/interactive-image-mr-shenisometric-detail-pantry19072021";
        //$data['rows'][2]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_3()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 3 - FOYER";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_4()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 4 - SAUNA BATHROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_5()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 5 - LIVING BATHROOMS";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_6()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 6 - MASSAGE ROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour6/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN - 360 RENDERING - PHASE 6 - GUEST BEDROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/shenvtour7/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_7()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 7 - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/shenvtour8/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/william/William_Presentation_26.03.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_2()
    {
        //$data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 1";
        //$data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/william/William_Presentation_26.03.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "WILLIAM - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "WILLIAM - INTERACTIVE BAR PRESENTATION - PHASE 2 (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/60bee0836bb3ae1003112e55/interactive-image-williamdetail-entertainmentbar15062021";
        $data['rows'][1]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_3()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 3";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/william/William_Presentation_02.09.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        //$data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - GUEST BEDROOM ALT 2 - PHASE 3";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour7B/tour.html";
        //$data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "WILLIAM - 360 RENDERING - STUDY ROOM - PHASE 3";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour6/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "WILLIAM - 360 RENDERING - KIDS BEDROOM - PHASE 3";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour5/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "WILLIAM - INTERACTIVE (INSIDE) - WET KITCHEN - PHASE 3";
        $data['rows'][4]['url'] = "https://view.genial.ly/6125e9f83ad2b1101e790d25/interactive-image-williaminteractivewetkitchen";
        $data['rows'][4]['button_title'] = "see inside wet kitchen cabinet";

        $data['rows'][5]['title'] = "WILLIAM - 360 RENDERING - WET KITCHEN - PHASE 3";
        $data['rows'][5]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour4/tour.html";
        $data['rows'][5]['button_title'] = "see 360 rendering";

        $data['rows'][6]['title'] = "WILLIAM - 360 RENDERING - PARENTS BEDROOM - PHASE 3";
        $data['rows'][6]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour3/tour.html";
        $data['rows'][6]['button_title'] = "see 360 rendering";

        $data['rows'][7]['title'] = "WILLIAM - 360 RENDERING - GUEST BEDROOM - PHASE 3";
        $data['rows'][7]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour7A/tour.html";
        $data['rows'][7]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_4()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 4";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/william/William_Presentation_13.01.2022.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - PHASE 4";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/williamvtour8/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function yusuf_project()
    {
        $data['rows'][0]['title'] = "YUSUF - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/yusufvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ellen_project()
    {
        $data['rows'][0]['title'] = "ELLEN - DESIGN PRESENTATION - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/ellen/Ellen_Presentation_07.05.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "ELLEN - 360 RENDERING - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ellenvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function intercontinental_project()
    {
        $data['rows'][0]['title'] = "INTERCONTINENTAL - DESIGN PRESENTATION - PHASE 1 - REV1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/intercontinental/Intercontinental_Presentation_25.06.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "INTERCONTINENTAL - 360 RENDERING - PHASE 1 - REV1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/intercontinentalvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project()
    {
        $data['rows'][0]['title'] = "LENY - 360 RENDERING - PHASE 1 - REV 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 1 - REV 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/Leny_Presentation_21.09.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 1";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/Leny_Presentation_03.09.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "LENY - RENDERING - PHASE 1";
        //$data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/rendering/Leny_RTU_Rendering1.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_2()
    {
        $data['rows'][0]['title'] = "LENY - KIDS BEDROOM 1 - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - KIDS BEDROOM 2 - 360 RENDERING - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "LENY - PRESENTATION - PHASE 2";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/Leny_Presentation_08.10.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_3()
    {
        $data['rows'][0]['title'] = "LENY - LIVING, DINING, PANTRY - 360 RENDERING - PHASE 3";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/lenyvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 3";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/Leny_Presentation_22.11.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_4()
    {
        $data['rows'][0]['title'] = "LENY - RAK SEPATU - 360 RENDERING - PHASE 4";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - BAR - 360 RENDERING - PHASE 4";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour6/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "LENY - DAPUR KOTOR - 360 RENDERING - PHASE 4";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour7/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "LENY - LAUNDRY ROOM - 360 RENDERING - PHASE 4";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour8/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "LENY - GUEST BEDROOM - 360 RENDERING - PHASE 4";
        $data['rows'][4]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour9/tour.html";
        $data['rows'][4]['button_title'] = "see 360 rendering";

        $data['rows'][5]['title'] = "LENY - PRAYER ROOM - 360 RENDERING - PHASE 4";
        $data['rows'][5]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour10/tour.html";
        $data['rows'][5]['button_title'] = "see 360 rendering";

        $data['rows'][6]['title'] = "LENY - PRESENTATION - PHASE 4";
        $data['rows'][6]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/leny/Leny_Presentation_17.03.2022.pdf";
        $data['rows'][6]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_5()
    {
        $data['rows'][0]['title'] = "LENY - GYM - 360 RENDERING - PHASE 5";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/lenyvtour10/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_6()
    {
        $data['rows'][0]['title'] = "LENY - GYM 2 - 360 RENDERING - PHASE 6";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/lenyvtour11/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ernivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - INTERACTIVE PRESENTATION - PHASE 1 (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/60d30b98b285430ffc07a2df/interactive-image-ernidetail-living-dining-pantry";
        $data['rows'][1]['button_title'] = "see presentation";

        $data['rows'][2]['title'] = "ERNI - PRESENTATION - PHASE 1";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/erni/Erni_Presentation_29.06.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project_2()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ernivtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - INTERACTIVE PRESENTATION - PHASE 2 (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/6152e071e5ee85102512a5f7/interactive-image-ernidapur-kotor-detail-bagian-dalam";
        $data['rows'][1]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project_3()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ernivtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - 360 RENDERING - OFFICE, LOUNGE, HOBBY";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/ernivtour4/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function faizal_project_1()
    {
        $data['rows'][0]['title'] = "FAIZAL - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/faizalvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "FAIZAL - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/faizal/FaizalRamali_Presentation_16.03.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project()
    {
        $data['rows'][0]['title'] = "SUMARKO - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SUMARKO - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sumarko/Sumarko_Presentation_13.12.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_2()
    {
        $data['rows'][0]['title'] = "SUMARKO - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SUMARKO - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sumarko/Sumarko_Presentation_23.02.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_3()
    {
        $data['rows'][0]['title'] = "KIDS BEDROOM - 360 RENDERING - PHASE 3A";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "GRANDKIDS BEDROOM - 360 RENDERING - PHASE 3B";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour4/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "FAMILY ROOM - 360 RENDERING - PHASE 3C";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour5/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "FOYER - 360 RENDERING - PHASE 3D";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour6/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "SUMARKO - PRESENTATION - PHASE 3";
        $data['rows'][4]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sumarko/Sumarko_Presentation_23.02.2022B.pdf";
        $data['rows'][4]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_4()
    {
        $data['rows'][1]['title'] = "GUEST BEDROOM - 360 RENDERING - PHASE 4A";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sumarkovtour7/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        //$data['rows'][2]['title'] = "SUMARKO - PRESENTATION - PHASE 4";
        //$data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sumarko/Sumarko_Presentation_23.02.2022B.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wandi_project()
    {
        $data['rows'][0]['title'] = "WANDI - 360 RENDERING - PHASE 1 -  REV1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/wandivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "WANDI - PRESENTATION - PHASE 1 -  REV1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/wandi/Wandi_Presentation_02.09.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function jane_project()
    {
        $data['rows'][0]['title'] = "JANE - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/janevtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "JANE - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/jane/Jane_Presentation_24.08.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sohpia_project()
    {
        $data['rows'][0]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sohpiavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SOHPIA - PRESENTATION - PHASE 1 - ALT 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sohpia/Sohpia_Presentation_29.10.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 2";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sohpiavtour2/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sohpia_project_2()
    {
        $data['rows'][0]['title'] = "SOHPIA - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sohpiavtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SOHPIA - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/sohpia/Sohpia_Presentation_25.02.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 2";
        //$data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/sohpiavtour2/tour.html";
        //$data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }


    public function kevin_project()
    {
        //$data['rows'][0]['title'] = "KEVIN - INTERACTIVE PRESENTATION - PHASE 1 (BEST VIEWED USING PC or MAC)";
        //$data['rows'][0]['url'] = "https://view.genial.ly/615aafd5acecfa100b9f8732/interactive-image-kevin-soenaryo-pantry-interactive";
        //$data['rows'][0]['button_title'] = "see presentation";

        //$data['rows'][1]['title'] = "KEVIN - RENDERING - PHASE 1";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/kevin/Kevin_Rendering_06.10.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "KEVIN - QUOTATION - PHASE 1";
        //$data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/kevin/Quotation_Kevin_01.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "KEVIN - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/kevinvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "KEVIN - PRESENTATION - PHASE 1";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/kevin/Kevin_Presentation_05.01.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function kevin_project_2()
    {
        $data['rows'][0]['title'] = "KEVIN - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/kevinvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "KEVIN - PRESENTATION - PHASE 2";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/kevin/Kevin_Presentation_14.01.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function willy_project()
    {
        $data['rows'][0]['title'] = "WILLY SOENARYO - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/willysoenaryovtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "WILLY SOENARYO - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/willy/Willy_Presentation_05.01.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function willy_talaga_project()
    {
        $data['rows'][0]['title'] = "WILLY - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/willyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function merry_project()
    {
        $data['rows'][0]['title'] = "MERRY - 360 RENDERING - PHASE 1 & PHASE 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/merryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MERRY - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/merry/Merry_Presentation_15.01.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "MERRY - PRESENTATION - PHASE 1";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/merry/Merry_Presentation_29.10.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function maya_project()
    {
        $data['rows'][0]['title'] = "MAYA - 360 RENDERING - PHASE 1 - REV 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/mayavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MAYA - PRESENTATION - PHASE 1 - REV 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/maya/Maya_Presentation_09.12.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "MAYA - INTERACTIVE PRESENTATION - PHASE 1 - REV 2 (BEST VIEWED USING PC or MAC)";
        $data['rows'][2]['url'] = "https://view.genial.ly/619c9b2dba39a10d85c096c9/interactive-image-mayapantrybarinteractive";
        $data['rows'][2]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function bais_project()
    {
        $data['rows'][0]['title'] = "BAIS - 360 RENDERING - LIBRARY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/baisvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "BAIS - PRESENTATION - LIBRARY";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/bais/BAIS_Presentation_20.06.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";
        
        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_project()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/dianvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/dian/Dian_Presentation_14.06.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function felyn_project()
    {
        $data['rows'][0]['title'] = "FELYN - 360 RENDERING - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/felynvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_kbp_project()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - LIVING, DINING, PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/diankbpvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY (update mirror pantry)";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/dian/Dian_Presentation_16.06.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_kbp_project_2()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/diankbpvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DIAN - 360 RENDERING - GUEST ROOM, FOYER, LOUNGE";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/diankbpvtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY (update mirror pantry)";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/dian/Dian_Presentation_16.06.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function brian_project()
    {
        $data['rows'][0]['title'] = "BRIAN - 360 RENDERING - LOUNGE";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/brianvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ollyvia_project()
    {
        $data['rows'][0]['title'] = "OLLYVIA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/ollyviavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function michelle_project()
    {
        $data['rows'][0]['title'] = "MICHELLE - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/michellevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MICHELLE - 360 RENDERING - LIVING ROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/michellevtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function xiong_project()
    {
        $data['rows'][0]['title'] = "XIONG - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/xiongvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function meiti_project()
    {
        $data['rows'][0]['title'] = "IBU MEITI - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU MEITI - 360 RENDERING - RTU PART 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "IBU MEITI - PRESENTATION - RTU";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/pdf/meiti/Meity_Presentation_02.05.2024.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function meiti_project_2()
    {
        $data['rows'][0]['title'] = "IBU MEITI - 360 RENDERING - LIVING, DINING, PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU MEITI - 360 RENDERING - GUEST AREA";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour7/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function meiti_project_3()
    {
        $data['rows'][0]['title'] = "IBU MEITI - 360 RENDERING - RTA MELDA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU MEITI - 360 RENDERING - RTA JACKSON";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour5/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "IBU MEITI - 360 RENDERING - RTA AMELIA";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour6/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function rancamaya_project_1()
    {
        $data['rows'][0]['title'] = "RANCAMAYA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/williamrancamayavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function davidshella_project()
    {
        $data['rows'][0]['title'] = "DAVID & SHELLA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/davidshellavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "DAVID & SHELLA - 360 RENDERING - KIDS BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/davidshellavtour1/tour.html";
        //$data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "DAVID & SHELLA - 360 RENDERING - KIDS BEDROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/davidshellavtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "DAVID & SHELLA - 360 RENDERING - LIVING DINING PANTRY";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/davidshellavtour3/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function meiti_project_4()
    {
        $data['rows'][0]['title'] = "IBU MEITI - 360 RENDERING - RUANG RAPAT";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/meityvtour8/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }
    
    public function vina_project()
    {
        $data['rows'][0]['title'] = "VINA - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/vinavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "VINA - PRESENTATION - RTU";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/vina/Vina_Presentation_08.05.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function hari_project()
    {
        $data['rows'][0]['title'] = "HARI - 360 RENDERING - PANTRY & LIVING & FOYER";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/harivtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "HARI - 360 RENDERING - STUDY";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/harivtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "HARI - PRESENTATION - PANTRY - PHASE 1";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/hari/Hari_presentation_05.01.2023_pantry.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][3]['title'] = "HARI - PRESENTATION - LIVING - PHASE 2";
        $data['rows'][3]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/hari/Hari_presentation_25.01.2023_living.pdf";
        $data['rows'][3]['button_title'] = "download PDF document";

        $data['rows'][4]['title'] = "HARI - PRESENTATION - FOYER & STUDY - PHASE 3";
        $data['rows'][4]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/hari/Hari_presentation_24.02.2023_foyer.pdf";
        $data['rows'][4]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function hendry_project()
    {
        $data['rows'][0]['title'] = "HENDRY - 360 RENDERING - KIDS BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/hendryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "HARI - PRESENTATION - PANTRY - PHASE 1";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/hari/Hari_presentation_05.01.2023_pantry.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function kingking_project()
    {
        $data['rows'][0]['title'] = "KING KING - 360 RENDERING - PANTRY - PHASE 1";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/kingkingvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "KING KING - PRESENTATION - PANTRY - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/kingking/Kingking_presentation_28.10.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function desi_project()
    {
        $data['rows'][0]['title'] = "IBU DESI - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/desivtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DESI - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/desi/Desi_presentation_13.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sri_project_1()
    {
        $data['rows'][0]['title'] = "SRI - 360 RENDERING - PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/srivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wilsonstacey_project()
    {
        $data['rows'][0]['title'] = "WILSON & STACEY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/wilsonstaceyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wilsonstacey_project_2()
    {
        $data['rows'][0]['title'] = "WILSON & STACEY - COMMON ROOM - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/wilsonstaceyvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function mozart_project()
    {
        $data['rows'][0]['title'] = "MOZART - LIVING & DINING & PANTRY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/mozartvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MOZART - MASTER BEDROOM - 360 RENDERING";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/mozartvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sevelyn_project()
    {
        $data['rows'][0]['title'] = "SEVELYN - KIDS BEDROOM - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/sevelynvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function alfred_project()
    {
        $data['rows'][0]['title'] = "ALFRED - MASTER BEDROOM - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/alfredvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function nana_project()
    {
        $data['rows'][0]['title'] = "NANA - PANTRY & LIVING - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/nanavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "NANA - PANTRY & LIVING - PRESENTATION";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/nana/Nana_Presentation_14.04.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function nana_project_2()
    {
        $data['rows'][0]['title'] = "NANA - MASTER BEDROOM - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/nanavtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "NANA - PANTRY & LIVING - PRESENTATION";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/nana/Nana_Presentation_14.04.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function adeline_project()
    {
        $data['rows'][0]['title'] = "ADELINE - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/adelinevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function adeline_project_2()
    {
        $data['rows'][0]['title'] = "ADELINE - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/adelinevtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/erlandvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTU";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/erland/Erland_Presentation_03.08.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_2()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTA Erland";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/erlandvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTA Erland";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/erland/Erland_Presentation_06.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_3()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTA 2";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/erlandvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTA 2";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/erland/Erland_Presentation_10.03.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_4()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - LIVING & PANTRY & DAPUR KOTOR & LOUNGE";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/erlandvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "ERLAND - PRESENTATION - LIVING & PANTRY & DAPUR KOTOR & LOUNGE";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/erland/Erland_Presentation_03.04.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_5()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - GUEST ROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/erlandvtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function abigail_project()
    {
        $data['rows'][0]['title'] = "ABIGAIL - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/abigailvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "REGINA - INTERACTIVE PRESENTATION (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/6267732390ed9500137292cb/interactive-image-reginapantry";
        $data['rows'][1]['button_title'] = "see presentation";

        $data['rows'][2]['title'] = "REGINA - PRESENTATION - PANTRY";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/regina/Regina_Presentation_11.05.2022.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_2()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - KITCHEN";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_3()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - LIVING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_4()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - 2nd Floor";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_5()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_6()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - OFFICE";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour6/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_7()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - GYM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/reginavtour7/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function excel_project()
    {
        $data['rows'][0]['title'] = "EXCEL - 360 RENDERING - LOBBY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/excelvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "EXCEL - 360 RENDERING - MEETING";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/excelvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "EXCEL - 360 RENDERING - DIRECTOR";
        $data['rows'][2]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/excelvtour3/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";
        
        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ira_project()
    {
        $data['rows'][0]['title'] = "IRA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/iravtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ira_project_2()
    {
        $data['rows'][0]['title'] = "IRA - 360 RENDERING - LIVING ROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/iravtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lidya_project()
    {
        $data['rows'][0]['title'] = "LIDYA - 360 RENDERING - KIDS BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/lidyavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function monica_project()
    {
        $data['rows'][0]['title'] = "MONICA - 360 RENDERING - PANTRY & DINING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/monicavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function monic_project()
    {
        $data['rows'][0]['title'] = "MONIC - 360 RENDERING - LIVING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/monicvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function ronald_project()
    {
        $data['rows'][0]['title'] = "RONALD - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/ronaldvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function rinaldo_project()
    {
        $data['rows'][0]['title'] = "RINALDO - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/rinaldovtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function irene_project()
    {
        $data['rows'][0]['title'] = "IRENE - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/irenevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IRENE - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/irene/Irene_Presentation_08.08.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function irene_project_2()
    {
        $data['rows'][0]['title'] = "IRENE - 360 RENDERING - LIVING, DINING, PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/irenevtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IRENE - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/irene/Irene_Presentation_08.08.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fitria_project()
    {
        $data['rows'][0]['title'] = "FITRIA - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/fitriavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "FITRIA - PRESENTATION - MASTER BEDROOM";
        $data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/fitria/Fitria_Presentation_12.07.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fitria_project_2()
    {
        $data['rows'][0]['title'] = "FITRIA - 360 RENDERING - LIVING & PANTRY";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/fitriavtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "FITRIA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/pdf/fitria/Fitria_Presentation_12.07.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function pita_project()
    {
        $data['rows'][0]['title'] = "INERRE x PITA - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/pitavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function jacky_project()
    {
        $data['rows'][0]['title'] = "JACKY - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr_backup'] . "/jackyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sample_idea()
    {
        $data['rows'][0]['title'] = "SAMPLE IDEA 1 - 360 RENDERING";
        $data['rows'][0]['url'] = "http://" . $GLOBALS['inerre_vr'] . "/samplevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function test_eksisting()
    {
        $this->load->helper('url');
        $this->load->view('pano/testeksisting');
    }
}
