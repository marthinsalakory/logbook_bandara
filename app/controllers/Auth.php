<?php

class Auth extends Controller
{
    public function index()
    {
        Auth::belum_login();
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            $result = Database::query("SELECT * FROM `users` WHERE `id` = '$id'");
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_object($result);
                if (password_verify($password, $row->password)) {
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $row;
                    header("Location: " . BASEURL . '/Home');
                    exit;
                }
            }
            Flasher::setFlash('Failed!', 'Login Failed', 'danger');
        }

        $data = [
            'title' => 'Login'
        ];

        $this->view('templates/header1', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['user']);
        unset($_SESSION);
        session_destroy();
        header('Location:' . BASEURL . '/Auth/login');
        exit;
    }

    public static function belum_login()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['user'])) {
            header("Location:" . BASEURL . '/Home');
            exit;
        }
    }

    public static function is_login()
    {
        $id = $_SESSION['user']->id;
        if (!isset($_SESSION['login']) && !isset($_SESSION['user']) || empty(Database::find('users', 'id', $id))) {
            header("Location:" . BASEURL . '/Auth/Logout');
            exit;
        }
    }

    public static function signed_in()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function user()
    {
        if (Auth::signed_in()) {
            return Database::find('users', 'id', $_SESSION['user']->id);
        }
    }

    public static function must_role($role)
    {
        Auth::is_login();
        if (Auth::user()->role != $role) {
            header("Location:" . BASEURL);
            exit;
        }
    }
}
