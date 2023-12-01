<?php
class User extends Controller
{
    public function index()
    {
        $data['title'] = 'Data User';
        $data['usr'] = $this->model('User_model')->getAllUser();
        //var_dump ($data['usr][0]['username]) ;
        $this->view('templates/header');
        $this->view('User/index', $data);
        $this->view('templates/footer');
    }
    public function prosesLogin()
    {
        session_start();
        if (isset($_POST["tuser"])) {
            $user = $_POST["tuser"];
            $pass = $_POST["tpass"];
            $data['user'] = $this->model('User_model')->cekUser($user, $pass);
            if (!$data['user'])
                echo "User Tdk Valid";
            else { //echo "UserValid";
                $_SESSION["iduser"] = $data['user']['iduser'];
                $_SESSION["username"] = $data['user']['username'];
                header("location:" . BASEURL . "/home/dashboard");
                //echo "user valid....";6
            }
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        header("location:" . BASEURL . "/Home");
    }
}
