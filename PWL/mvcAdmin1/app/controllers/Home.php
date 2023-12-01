<?php
class Home extends Controller
{
    public function index()
    {
        //echo "Belajar MVC";
        $this->view("templates/header");
        $this->view("home/index");
        $this->view("templates/footer");
    }
}
