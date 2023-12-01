<?php
class Home extends Controller {
    public function index(){
        session_start();
        if(isset($_SESSIOn["iduser"])) {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');
        }
        else {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');    
        }
        
    }

}