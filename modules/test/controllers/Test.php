<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('TestModel');
    }

    public function index()
    {
        $this->load->view('test');
    }
}
