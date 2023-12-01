<?php
class About extends Controller
{
    public function index($nama = 'Bagas', $pekerjaan = 'Tukang Tidur')
    {
        $data['title'] = 'Halaman About';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}
