<?php
class About extends Controller {
    public function index($nama = 'Bejo', $pekerjaan = 'guru'){
        $data['title'] = 'Halaman About';
        $this->view('templates/header');
        $this->view('about/index');
        $this->view('templates/footer');
    }

}