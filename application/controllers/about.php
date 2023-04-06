
<?php
class About extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_landing');
        $this->load->view('v_about');
    }
}
