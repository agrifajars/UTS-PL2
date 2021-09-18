<?php

class LoginController extends Controller
{

    public function index()
    {
        $this->view('login/index');
    }

    public function login()
    {
        $USER = $this->model('PetugasModel')->loginPetugas($_POST['inputUsername']);
        if ($USER) {
            if (password_verify($_POST['inputPassword'], $USER['password'])) {

                $_SESSION['id_petugas'] = $USER['id_petugas'];
                $_SESSION['nama_petugas'] = $USER['nama_petugas'];
                $_SESSION['level'] = $USER['level'];
                $_SESSION['is_login'] = TRUE;
                
                header('Location: ' . BASEURL . 'home/welcome');
                exit;
            } else {
                header('Location: ' . BASEURL);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }

}
