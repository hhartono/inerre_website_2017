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

    public function chrisna_project_2()
    {
        $data['rows'][0]['title'] = "CHRISNA - LAMANDAU - Tambahan - 360 Rendering";
        $data['rows'][0]['url'] = "http://18.139.219.177/chrisnavtourlt2tambahan/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

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
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/edward/Edward_Presentation_31.03.2023.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "EDWARD - 360 RENDERING - RTU & WIC UTAMA";
        $data['rows'][1]['url'] = "http://18.139.219.177/edwardrtuvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function edward_project_3()
    {
        $data['rows'][0]['title'] = "EDWARD - 360 RENDERING - KIDS BEDROOM 1 (EDWARD) - PHASE 3";
        $data['rows'][0]['url'] = "http://18.139.219.177/edwardvtour3A/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "EDWARD - 360 RENDERING - KIDS BEDROOM 2 (EDWARD) - PHASE 3";
        $data['rows'][1]['url'] = "http://18.139.219.177/edwardvtour3B/tour.html";
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

        $data['rows'][0]['title'] = "LUSIANA - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/lusianavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function lusiana_project_3()
    {
        $data['rows'][1]['title'] = "LUSIANA - 360 RENDERING - PHASE 3";
        $data['rows'][1]['url'] = "http://18.139.219.177/lusianavtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

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

    public function shen_project()
    {
        //$data['rows'][0]['title'] = "MR. SHEN - DESIGN PRESENTATION - PHASE 1 - REV1";
        //$data['rows'][0]['url'] = "http://18.139.219.177/pdf/shen/MrShen_Presentation_05.02.2021.pdf";
        //$data['rows'][0]['button_title'] = "download PDF document";

        // REV2
        //$data['rows'][0]['title'] = "MR. SHEN - INTERACTIVE PANTRY PRESENTATION - PHASE 1 - REV2 (BEST VIEWED USING PC or MAC)";
        //$data['rows'][0]['url'] = "https://view.genial.ly/60a4c9f1de04a30d2bea4d25/interactive-image-mr-shenisometric-detail-pantry19052021";
        //$data['rows'][0]['button_title'] = "see presentation";

        // REV3
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 1 - REV3";
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN - MATERIAL PRESENTATION - PHASE 1 - REV3";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/shen/MrShen_Material_25.08.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "MR. SHEN - ISLAND WIRING DIAGRAM - PHASE 1 - REV3";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/shen/MrShen_Island_Wiring_25.08.2021.pdf";
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
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "MR. SHEN - 360 RENDERING - PHASE 2 - FOYER";
        //$data['rows'][1]['url'] = "http://18.139.219.177/shenvtour3/tour.html";
        //$data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN -  PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/shen/MrShen_Presentation_01.04.2022.pdf";
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
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_4()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 4 - SAUNA BATHROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_5()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 5 - LIVING BATHROOMS";
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function shen_project_6()
    {
        $data['rows'][0]['title'] = "MR. SHEN - 360 RENDERING - PHASE 6 - MASSAGE ROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/shenvtour6/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MR. SHEN - 360 RENDERING - PHASE 6 - GUEST BEDROOM";
        $data['rows'][1]['url'] = "http://18.139.219.177/shenvtour7/tour.html";
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

        $data['rows'][1]['title'] = "WILLIAM - INTERACTIVE BAR PRESENTATION - PHASE 2 (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/60bee0836bb3ae1003112e55/interactive-image-williamdetail-entertainmentbar15062021";
        $data['rows'][1]['button_title'] = "see presentation";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_3()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 3";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/william/William_Presentation_02.09.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        //$data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - GUEST BEDROOM ALT 2 - PHASE 3";
        //$data['rows'][1]['url'] = "http://18.139.219.177/williamvtour7B/tour.html";
        //$data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "WILLIAM - 360 RENDERING - STUDY ROOM - PHASE 3";
        $data['rows'][2]['url'] = "http://18.139.219.177/williamvtour6/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "WILLIAM - 360 RENDERING - KIDS BEDROOM - PHASE 3";
        $data['rows'][3]['url'] = "http://18.139.219.177/williamvtour5/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "WILLIAM - INTERACTIVE (INSIDE) - WET KITCHEN - PHASE 3";
        $data['rows'][4]['url'] = "https://view.genial.ly/6125e9f83ad2b1101e790d25/interactive-image-williaminteractivewetkitchen";
        $data['rows'][4]['button_title'] = "see inside wet kitchen cabinet";

        $data['rows'][5]['title'] = "WILLIAM - 360 RENDERING - WET KITCHEN - PHASE 3";
        $data['rows'][5]['url'] = "http://18.139.219.177/williamvtour4/tour.html";
        $data['rows'][5]['button_title'] = "see 360 rendering";

        $data['rows'][6]['title'] = "WILLIAM - 360 RENDERING - PARENTS BEDROOM - PHASE 3";
        $data['rows'][6]['url'] = "http://18.139.219.177/williamvtour3/tour.html";
        $data['rows'][6]['button_title'] = "see 360 rendering";

        $data['rows'][7]['title'] = "WILLIAM - 360 RENDERING - GUEST BEDROOM - PHASE 3";
        $data['rows'][7]['url'] = "http://18.139.219.177/williamvtour7A/tour.html";
        $data['rows'][7]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function william_project_4()
    {
        $data['rows'][0]['title'] = "WILLIAM - DESIGN PRESENTATION - PHASE 4";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/william/William_Presentation_13.01.2022.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "WILLIAM - 360 RENDERING - PHASE 4";
        $data['rows'][1]['url'] = "http://18.139.219.177/williamvtour8/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

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
        $data['rows'][0]['title'] = "INTERCONTINENTAL - DESIGN PRESENTATION - PHASE 1 - REV1";
        $data['rows'][0]['url'] = "http://18.139.219.177/pdf/intercontinental/Intercontinental_Presentation_25.06.2021.pdf";
        $data['rows'][0]['button_title'] = "download PDF document";

        $data['rows'][1]['title'] = "INTERCONTINENTAL - 360 RENDERING - PHASE 1 - REV1";
        $data['rows'][1]['url'] = "http://18.139.219.177/intercontinentalvtour/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project()
    {
        $data['rows'][0]['title'] = "LENY - 360 RENDERING - PHASE 1 - REV 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 1 - REV 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/leny/Leny_Presentation_21.09.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 1";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/leny/Leny_Presentation_03.09.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "LENY - RENDERING - PHASE 1";
        //$data['rows'][2]['url'] = "http://18.139.219.177/pdf/leny/rendering/Leny_RTU_Rendering1.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_2()
    {
        $data['rows'][0]['title'] = "LENY - KIDS BEDROOM 1 - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - KIDS BEDROOM 2 - 360 RENDERING - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/lenyvtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "LENY - PRESENTATION - PHASE 2";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/leny/Leny_Presentation_08.10.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_3()
    {
        $data['rows'][0]['title'] = "LENY - LIVING, DINING, PANTRY - 360 RENDERING - PHASE 3";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "LENY - PRESENTATION - PHASE 3";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/leny/Leny_Presentation_22.11.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_4()
    {
        $data['rows'][0]['title'] = "LENY - RAK SEPATU - 360 RENDERING - PHASE 4";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "LENY - BAR - 360 RENDERING - PHASE 4";
        $data['rows'][1]['url'] = "http://18.139.219.177/lenyvtour6/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "LENY - DAPUR KOTOR - 360 RENDERING - PHASE 4";
        $data['rows'][2]['url'] = "http://18.139.219.177/lenyvtour7/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "LENY - LAUNDRY ROOM - 360 RENDERING - PHASE 4";
        $data['rows'][3]['url'] = "http://18.139.219.177/lenyvtour8/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "LENY - GUEST BEDROOM - 360 RENDERING - PHASE 4";
        $data['rows'][4]['url'] = "http://18.139.219.177/lenyvtour9/tour.html";
        $data['rows'][4]['button_title'] = "see 360 rendering";

        $data['rows'][5]['title'] = "LENY - PRAYER ROOM - 360 RENDERING - PHASE 4";
        $data['rows'][5]['url'] = "http://18.139.219.177/lenyvtour10/tour.html";
        $data['rows'][5]['button_title'] = "see 360 rendering";

        $data['rows'][6]['title'] = "LENY - PRESENTATION - PHASE 4";
        $data['rows'][6]['url'] = "http://18.139.219.177/pdf/leny/Leny_Presentation_17.03.2022.pdf";
        $data['rows'][6]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function leny_project_5()
    {
        $data['rows'][0]['title'] = "LENY - GYM - 360 RENDERING - PHASE 5";
        $data['rows'][0]['url'] = "http://18.139.219.177/lenyvtour10/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/ernivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - INTERACTIVE PRESENTATION - PHASE 1 (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/60d30b98b285430ffc07a2df/interactive-image-ernidetail-living-dining-pantry";
        $data['rows'][1]['button_title'] = "see presentation";

        $data['rows'][2]['title'] = "ERNI - PRESENTATION - PHASE 1";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/erni/Erni_Presentation_29.06.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erni_project_2()
    {
        $data['rows'][0]['title'] = "ERNI - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/ernivtour2/tour.html";
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
        $data['rows'][0]['url'] = "http://18.139.219.177/ernivtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERNI - 360 RENDERING - OFFICE, LOUNGE, HOBBY";
        $data['rows'][1]['url'] = "http://18.139.219.177/ernivtour4/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function faizal_project_1()
    {
        $data['rows'][0]['title'] = "FAIZAL - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/faizalvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "FAIZAL - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/faizal/FaizalRamali_Presentation_16.03.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project()
    {
        $data['rows'][0]['title'] = "SUMARKO - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/sumarkovtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SUMARKO - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/sumarko/Sumarko_Presentation_13.12.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_2()
    {
        $data['rows'][0]['title'] = "SUMARKO - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/sumarkovtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SUMARKO - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/sumarko/Sumarko_Presentation_23.02.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_3()
    {
        $data['rows'][0]['title'] = "KIDS BEDROOM - 360 RENDERING - PHASE 3A";
        $data['rows'][0]['url'] = "http://18.139.219.177/sumarkovtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "GRANDKIDS BEDROOM - 360 RENDERING - PHASE 3B";
        $data['rows'][1]['url'] = "http://18.139.219.177/sumarkovtour4/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "FAMILY ROOM - 360 RENDERING - PHASE 3C";
        $data['rows'][2]['url'] = "http://18.139.219.177/sumarkovtour5/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $data['rows'][3]['title'] = "FOYER - 360 RENDERING - PHASE 3D";
        $data['rows'][3]['url'] = "http://18.139.219.177/sumarkovtour6/tour.html";
        $data['rows'][3]['button_title'] = "see 360 rendering";

        $data['rows'][4]['title'] = "SUMARKO - PRESENTATION - PHASE 3";
        $data['rows'][4]['url'] = "http://18.139.219.177/pdf/sumarko/Sumarko_Presentation_23.02.2022B.pdf";
        $data['rows'][4]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sumarko_project_4()
    {
        $data['rows'][1]['title'] = "GUEST BEDROOM - 360 RENDERING - PHASE 4A";
        $data['rows'][1]['url'] = "http://18.139.219.177/sumarkovtour7/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        //$data['rows'][2]['title'] = "SUMARKO - PRESENTATION - PHASE 4";
        //$data['rows'][2]['url'] = "http://18.139.219.177/pdf/sumarko/Sumarko_Presentation_23.02.2022B.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wandi_project()
    {
        $data['rows'][0]['title'] = "WANDI - 360 RENDERING - PHASE 1 -  REV1";
        $data['rows'][0]['url'] = "http://18.139.219.177/wandivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "WANDI - PRESENTATION - PHASE 1 -  REV1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/wandi/Wandi_Presentation_02.09.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function jane_project()
    {
        $data['rows'][0]['title'] = "JANE - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/janevtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "JANE - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/jane/Jane_Presentation_24.08.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sohpia_project()
    {
        $data['rows'][0]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/sohpiavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SOHPIA - PRESENTATION - PHASE 1 - ALT 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/sohpia/Sohpia_Presentation_29.10.2021.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 2";
        $data['rows'][2]['url'] = "http://18.139.219.177/sohpiavtour2/tour.html";
        $data['rows'][2]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sohpia_project_2()
    {
        $data['rows'][0]['title'] = "SOHPIA - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/sohpiavtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "SOHPIA - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/sohpia/Sohpia_Presentation_25.02.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "SOHPIA - 360 RENDERING - PHASE 1 - ALT 2";
        //$data['rows'][2]['url'] = "http://18.139.219.177/sohpiavtour2/tour.html";
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
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/kevin/Kevin_Rendering_06.10.2021.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        //$data['rows'][2]['title'] = "KEVIN - QUOTATION - PHASE 1";
        //$data['rows'][2]['url'] = "http://18.139.219.177/pdf/kevin/Quotation_Kevin_01.pdf";
        //$data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][0]['title'] = "KEVIN - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/kevinvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "KEVIN - PRESENTATION - PHASE 1";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/kevin/Kevin_Presentation_05.01.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function kevin_project_2()
    {
        $data['rows'][0]['title'] = "KEVIN - 360 RENDERING - PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/kevinvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "KEVIN - PRESENTATION - PHASE 2";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/kevin/Kevin_Presentation_14.01.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function willy_project()
    {
        $data['rows'][0]['title'] = "WILLY SOENARYO - 360 RENDERING - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/willysoenaryovtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "WILLY SOENARYO - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/willy/Willy_Presentation_05.01.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function merry_project()
    {
        $data['rows'][0]['title'] = "MERRY - 360 RENDERING - PHASE 1 & PHASE 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/merryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MERRY - PRESENTATION - PHASE 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/merry/Merry_Presentation_15.01.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $data['rows'][2]['title'] = "MERRY - PRESENTATION - PHASE 1";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/merry/Merry_Presentation_29.10.2021.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function maya_project()
    {
        $data['rows'][0]['title'] = "MAYA - 360 RENDERING - PHASE 1 - REV 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/mayavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "MAYA - PRESENTATION - PHASE 1 - REV 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/maya/Maya_Presentation_09.12.2021.pdf";
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
        $data['rows'][0]['url'] = "http://18.139.219.177/baisvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "BAIS - PRESENTATION - LIBRARY";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/bais/BAIS_Presentation_20.06.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";
        
        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_project()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://18.139.219.177/dianvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/dian/Dian_Presentation_14.06.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function felyn_project()
    {
        $data['rows'][0]['title'] = "FELYN - 360 RENDERING - RTU & WIC utama";
        $data['rows'][0]['url'] = "http://18.139.219.177/felynvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_kbp_project()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - LIVING, DINING, PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/diankbpvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY (update mirror pantry)";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/dian/Dian_Presentation_16.06.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function dian_kbp_project_2()
    {
        $data['rows'][0]['title'] = "IBU DIAN - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://18.139.219.177/diankbpvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DIAN - 360 RENDERING - GUEST ROOM, FOYER, LOUNGE";
        $data['rows'][1]['url'] = "http://18.139.219.177/diankbpvtour3/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "IBU DIAN - PRESENTATION - LIVING, DINING, PANTRY (update mirror pantry)";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/dian/Dian_Presentation_16.06.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function meity_project()
    {
        $data['rows'][0]['title'] = "IBU MEITI - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://18.139.219.177/meityvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU MEITI - 360 RENDERING - RTU PART 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/meityvtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function vina_project()
    {
        $data['rows'][0]['title'] = "VINA - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://18.139.219.177/vinavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "VINA - PRESENTATION - RTU";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/vina/Vina_Presentation_08.05.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function hari_project()
    {
        $data['rows'][0]['title'] = "HARI - 360 RENDERING - PANTRY & LIVING & FOYER";
        $data['rows'][0]['url'] = "http://18.139.219.177/harivtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "HARI - 360 RENDERING - STUDY";
        $data['rows'][1]['url'] = "http://18.139.219.177/harivtour2/tour.html";
        $data['rows'][1]['button_title'] = "see 360 rendering";

        $data['rows'][2]['title'] = "HARI - PRESENTATION - PANTRY - PHASE 1";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/hari/Hari_presentation_05.01.2023_pantry.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $data['rows'][3]['title'] = "HARI - PRESENTATION - LIVING - PHASE 2";
        $data['rows'][3]['url'] = "http://18.139.219.177/pdf/hari/Hari_presentation_25.01.2023_living.pdf";
        $data['rows'][3]['button_title'] = "download PDF document";

        $data['rows'][4]['title'] = "HARI - PRESENTATION - FOYER & STUDY - PHASE 3";
        $data['rows'][4]['url'] = "http://18.139.219.177/pdf/hari/Hari_presentation_24.02.2023_foyer.pdf";
        $data['rows'][4]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function hendry_project()
    {
        $data['rows'][0]['title'] = "HENDRY - 360 RENDERING - KIDS BEDROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/hendryvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "HARI - PRESENTATION - PANTRY - PHASE 1";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/hari/Hari_presentation_05.01.2023_pantry.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function kingking_project()
    {
        $data['rows'][0]['title'] = "KING KING - 360 RENDERING - PANTRY - PHASE 1";
        $data['rows'][0]['url'] = "http://18.139.219.177/kingkingvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "KING KING - PRESENTATION - PANTRY - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/kingking/Kingking_presentation_28.10.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function desi_project()
    {
        $data['rows'][0]['title'] = "IBU DESI - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/desivtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IBU DESI - PRESENTATION - PHASE 1";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/desi/Desi_presentation_13.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sri_project_1()
    {
        $data['rows'][0]['title'] = "SRI - 360 RENDERING - PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/srivtour1/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wilsonstacey_project()
    {
        $data['rows'][0]['title'] = "WILSON & STACEY - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/wilsonstaceyvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function wilsonstacey_project_2()
    {
        $data['rows'][0]['title'] = "WILSON & STACEY - COMMON ROOM - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/wilsonstaceyvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function nana_project()
    {
        $data['rows'][0]['title'] = "NANA - PANTRY & LIVING - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/nanavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "NANA - PANTRY & LIVING - PRESENTATION";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/nana/Nana_Presentation_14.04.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function adeline_project()
    {
        $data['rows'][0]['title'] = "ADELINE - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://18.139.219.177/adelinevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function adeline_project_2()
    {
        $data['rows'][0]['title'] = "ADELINE - 360 RENDERING - RTA";
        $data['rows'][0]['url'] = "http://18.139.219.177/adelinevtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTU";
        $data['rows'][0]['url'] = "http://18.139.219.177/erlandvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTU";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/erland/Erland_Presentation_03.08.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_2()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTA Erland";
        $data['rows'][0]['url'] = "http://18.139.219.177/erlandvtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTA Erland";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/erland/Erland_Presentation_06.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_3()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - RTA 2";
        $data['rows'][0]['url'] = "http://18.139.219.177/erlandvtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "ERLAND - PRESENTATION - RTA 2";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/erland/Erland_Presentation_10.03.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function erland_project_4()
    {
        $data['rows'][0]['title'] = "ERLAND - 360 RENDERING - LIVING & PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/erlandvtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "ERLAND - PRESENTATION - LIVING & PANTRY";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/erland/Erland_Presentation_03.04.2023.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function abigail_project()
    {
        $data['rows'][0]['title'] = "ABIGAIL - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/abigailvtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "REGINA - INTERACTIVE PRESENTATION (BEST VIEWED USING PC or MAC)";
        $data['rows'][1]['url'] = "https://view.genial.ly/6267732390ed9500137292cb/interactive-image-reginapantry";
        $data['rows'][1]['button_title'] = "see presentation";

        $data['rows'][2]['title'] = "REGINA - PRESENTATION - PANTRY";
        $data['rows'][2]['url'] = "http://18.139.219.177/pdf/regina/Regina_Presentation_11.05.2022.pdf";
        $data['rows'][2]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_2()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - KITCHEN";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_3()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - LIVING";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour3/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_4()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - 2nd Floor";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour4/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_5()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour5/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_6()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - OFFICE";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour6/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function regina_project_7()
    {
        $data['rows'][0]['title'] = "REGINA - 360 RENDERING - GYM";
        $data['rows'][0]['url'] = "http://18.139.219.177/reginavtour7/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "REGINA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/regina/Regina_Presentation_02.09.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function irene_project()
    {
        $data['rows'][0]['title'] = "IRENE - 360 RENDERING - MASTER BEDROOM";
        $data['rows'][0]['url'] = "http://18.139.219.177/irenevtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "IRENE - PRESENTATION - MASTER BEDROOM";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/irene/Irene_Presentation_08.08.2023.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fitria_project()
    {
        $data['rows'][0]['title'] = "FITRIA - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/fitriavtour/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        $data['rows'][1]['title'] = "FITRIA - PRESENTATION - MASTER BEDROOM";
        $data['rows'][1]['url'] = "http://18.139.219.177/pdf/fitria/Fitria_Presentation_12.07.2022.pdf";
        $data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function fitria_project_2()
    {
        $data['rows'][0]['title'] = "FITRIA - 360 RENDERING - LIVING & PANTRY";
        $data['rows'][0]['url'] = "http://18.139.219.177/fitriavtour2/tour.html";
        $data['rows'][0]['button_title'] = "see 360 rendering";

        //$data['rows'][1]['title'] = "FITRIA - PRESENTATION - MASTER BEDROOM";
        //$data['rows'][1]['url'] = "http://18.139.219.177/pdf/fitria/Fitria_Presentation_12.07.2022.pdf";
        //$data['rows'][1]['button_title'] = "download PDF document";

        $this->load->helper('url');
        $this->load->view('pano/basic_project_view', $data);
    }

    public function sample_idea()
    {
        $data['rows'][0]['title'] = "SAMPLE IDEA 1 - 360 RENDERING";
        $data['rows'][0]['url'] = "http://18.139.219.177/samplevtour/tour.html";
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
