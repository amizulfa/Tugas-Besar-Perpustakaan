
<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_landing');
        $this->load->view('v_homee');
    }
}
