<?php
class Member extends Controller
{
	public function index()
	{
		session_start();
		if (isset($_SESSION['iduser'])) {

			$data['title'] = 'Data Member';
			$data['member'] = $this->model('Member_model')->getAllMember();
			$this->view('templates/header');
			$this->view('member/index', $data);
			$this->view('templates/footer');
		} else {
			header("location:" . BASEURL . "/home");
		}
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Member';
		$data['member'] = $this->model('Member_model')->getMemberById($id);
		$this->view('templates/header', $data);
		$this->view('member/detail', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Member';
		$data['member'] = $this->model('Member_model')->getMemberById($id);
		$this->view('templates/header', $data);
		$this->view('member/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Member';
		$this->view('templates/header', $data);
		$this->view('member/tambah');
		$this->view('templates/footer');
	}

	public function insMember()
	{
		$hasil = $this->model('Member_model')->add($_POST, $_FILES['foto']);
		header("location:" . BASEURL . "/member");
	}

	public function updMember()
	{
		$this->model('Member_model')->edit($_POST, $_FILES['foto']);
		header("location:" . BASEURL . "/member");
	}

	public function delMember($id)
	{
		$this->model('Member_model')->del($id);
		header("location:" . BASEURL . "/member");
	}
}
