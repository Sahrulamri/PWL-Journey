<?php
class About extends Controller
{
    public function index()
    {
        //echo "Halaman About";
        $this->view("templates/header");
        $this->view("About/index");
        $this->view("templates/footer");
    }
}
